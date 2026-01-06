<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;

// Home and other routes
Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    // ... your menu data
});

Route::get('/about', function () {
    // ... your about data
});

Route::get('/gallery', function () {
    // ... your gallery data
});

Route::get('/contact', function () {
    // ... your contact data
});

// Public reservation routes
Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/success', [ReservationController::class, 'success'])->name('reservation.success');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/reservations', [AdminReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/{id}', [AdminReservationController::class, 'show'])->name('reservations.show');
    Route::put('/reservations/{id}', [AdminReservationController::class, 'update'])->name('reservations.update');
    Route::delete('/reservations/{id}', [AdminReservationController::class, 'destroy'])->name('reservations.destroy');
});

// Debug routes (remove in production)
Route::get('/debug-reservations', function () {
    try {
        echo "<h1>Reservations Debug</h1>";
        
        // Check if model exists
        if (class_exists('App\Models\Reservation')) {
            echo "✅ Model exists<br>";
            
            $count = \App\Models\Reservation::count();
            echo "Total Reservations: $count<br><br>";
            
            if ($count > 0) {
                $reservations = \App\Models\Reservation::all();
                foreach ($reservations as $res) {
                    echo "<strong>ID:</strong> {$res->id}<br>";
                    echo "<strong>Name:</strong> {$res->name}<br>";
                    echo "<strong>Email:</strong> {$res->email}<br>";
                    echo "<strong>Date:</strong> {$res->date}<br>";
                    echo "<strong>Status:</strong> {$res->status}<br>";
                    echo "<hr>";
                }
            } else {
                echo "No reservations found. Visit <a href='/reservation'>Reservation Page</a> to create one.";
            }
        } else {
            echo "❌ Model doesn't exist!<br>";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
});

// Quick test route to add sample data
Route::get('/add-sample-reservation', function () {
    try {
        \App\Models\Reservation::create([
            'name' => 'Test Customer',
            'email' => 'test@example.com',
            'phone' => '03161103616',
            'date' => now()->addDays(2),
            'time' => '19:00',
            'guests' => 4,
            'special_request' => 'This is a test reservation',
            'status' => 'pending',
        ]);
        
        return redirect('/admin/reservations')->with('success', 'Test reservation added!');
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

// Quick reset and migrate
Route::get('/reset-db', function () {
    Artisan::call('migrate:fresh');
    return "Database reset!";
});