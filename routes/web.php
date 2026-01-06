<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    $dishes = [
        [
            'name' => 'Butter Chicken',
            'price' => '₹450',
            'category' => 'Main Course',
            'image' => 'https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1dHRlciUyMGNoaWNrZW58ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'description' => 'Creamy, rich and flavorful chicken in tomato gravy'
        ],
        [
            'name' => 'Paneer Tikka',
            'price' => '₹350', 
            'category' => 'Starters',
            'image' => 'https://images.unsplash.com/photo-1606491956689-2ea866880c84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBhbmVlciUyMHRpa2trYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'description' => 'Smoky and spicy cottage cheese marinated in spices'
        ],
        [
            'name' => 'Hyderabadi Biryani',
            'price' => '₹380',
            'category' => 'Main Course',
            'image' => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'description' => 'Aromatic basmati rice with tender chicken and spices'
        ],
        [
            'name' => 'Gulab Jamun',
            'price' => '₹120',
            'category' => 'Desserts',
            'image' => 'https://images.unsplash.com/photo-1589301760014-d929f3979dbc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3VsYWIlMjBqYW11bnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'description' => 'Sweet and syrupy milk-based dessert'
        ],
        [
            'name' => 'Masala Dosa',
            'price' => '₹180',
            'category' => 'South Indian',
            'image' => 'https://images.unsplash.com/photo-1668236543090-82eba5ee5976?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZG9zYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'description' => 'Crispy rice crepe with spiced potato filling'
        ],
        [
            'name' => 'Tandoori Chicken',
            'price' => '₹420',
            'category' => 'Starters',
            'image' => 'https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGFuZG9vcmklMjBjaGlja2VufGVufDB8fDB8fHww&w=1000&q=80',
            'description' => 'Chicken marinated in yogurt and spices, cooked in tandoor'
        ],
        [
            'name' => 'Palak Paneer',
            'price' => '₹320',
            'category' => 'Main Course',
            'image' => 'https://images.unsplash.com/photo-1631452180519-c014fe946bc7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFsYWslMjBwYW5lZXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'description' => 'Cottage cheese in creamy spinach gravy'
        ],
        [
            'name' => 'Rasmalai',
            'price' => '₹150',
            'category' => 'Desserts',
            'image' => 'https://images.unsplash.com/photo-1609957234185-830cee9268b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFzbWFsYWl8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'description' => 'Soft cheese patties in sweetened milk'
        ]
    ];
    return view('menu', ['dishes' => $dishes]);
});
Route::get('/about', function () {
    $team = [
        [
            'name' => 'Chef Ahmed Raza',
            'role' => 'Head Chef',
            'image' => 'https://images.unsplash.com/photo-1605497788044-5a32c7078486?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNoZWZ8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'experience' => '12+ years',
            'specialty' => 'Karachi Biryani & BBQ'
        ],
        [
            'name' => 'Zainab Khan',
            'role' => 'Restaurant Manager',
            'image' => 'https://images.unsplash.com/photo-1551836026-d5c8acf7d7d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1hbmFnZXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'experience' => '8+ years',
            'specialty' => 'Customer Service'
        ],
        [
            'name' => 'Bilal Siddiqui',
            'role' => 'BBQ Master',
            'image' => 'https://images.unsplash.com/photo-1583394293214-28ded15ee548?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNoZWZ8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'experience' => '10+ years',
            'specialty' => 'Tikka & Seekh Kebabs'
        ],
        [
            'name' => 'Fatima Shah',
            'role' => 'Dessert Chef',
            'image' => 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGNoZWZ8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'experience' => '6+ years',
            'specialty' => 'Traditional Pakistani Sweets'
        ]
    ];

    $features = [
        [
            'icon' => '🌶️',
            'title' => 'Authentic Karachi Flavors',
            'description' => 'Experience the true taste of Karachi with our traditional recipes and spices'
        ],
        [
            'icon' => '🔥',
            'title' => 'Live BBQ Station',
            'description' => 'Freshly grilled kebabs and tikkas right before your eyes'
        ],
        [
            'icon' => '🏠',
            'title' => 'Family Heritage',
            'description' => 'Recipes passed down through generations of Karachi food lovers'
        ],
        [
            'icon' => '⭐',
            'title' => 'Premium Quality',
            'description' => 'Only the finest ingredients for authentic Karachi street food experience'
        ]
    ];

    return view('about', [
        'team' => $team,
        'features' => $features
    ]);
});

Route::get('/gallery', function () {
    $gallery = [
        [
            'image' => 'https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1dHRlciUyMGNoaWNrZW58ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'title' => 'Butter Chicken',
            'category' => 'Main Course'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmlyeWFuaXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'title' => 'Hyderabadi Biryani',
            'category' => 'Main Course'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1606491956689-2ea866880c84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBhbmVlciUyMHRpa2trYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'title' => 'Paneer Tikka',
            'category' => 'Starters'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGFuZG9vcmklMjBjaGlja2VufGVufDB8fDB8fHww&w=1000&q=80',
            'title' => 'Tandoori Chicken',
            'category' => 'Starters'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1589301760014-d929f3979dbc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3VsYWIlMjBqYW11bnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'title' => 'Gulab Jamun',
            'category' => 'Desserts'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1609957234185-830cee9268b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFzbWFsYWl8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'title' => 'Rasmalai',
            'category' => 'Desserts'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1668236543090-82eba5ee5976?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZG9zYXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'title' => 'Masala Dosa',
            'category' => 'South Indian'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1631452180519-c014fe946bc7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFsYWslMjBwYW5lZXJ8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'title' => 'Palak Paneer',
            'category' => 'Main Course'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFraXN0YW5pJTIwZm9vZHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'title' => 'Chicken Karahi',
            'category' => 'Main Course'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1563379091339-03246963d96f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2Vla2glMjBrZWJhYnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            'title' => 'Seekh Kebab',
            'category' => 'Starters'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1598214886806-c87b84b7078b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8a2FyYWNoaSUyMGZvb2R8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'title' => 'Bun Kebab',
            'category' => 'Street Food'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1572802419224-296b0aeee0d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNoYWl8ZW58MHx8MHx8fDA%3D&w=1000&q=80',
            'title' => 'Karak Chai',
            'category' => 'Beverages'
        ]
    ];

    return view('gallery', ['gallery' => $gallery]);
});

Route::get('/contact', function () {
    $contactInfo = [
        'address' => 'Burns Road, Karachi, Pakistan',
        'phone' => '+92 300 1234567',
        'email' => 'info@spicemagickarachi.com',
        'timings' => [
            'Monday - Friday' => '11:00 AM - 11:00 PM',
            'Saturday - Sunday' => '11:00 AM - 12:00 AM'
        ]
    ];

    return view('contact', ['contactInfo' => $contactInfo]);
});

// Contact Form Submit Route (POST)
Route::post('/contact', function (Request $request) {
    // Simple form validation and processing
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'message' => 'required|string'
    ]);

    // Here you can add email sending logic
    // For now, we'll just return success message
    
    return back()->with('success', 'Thank you for your message! We will get back to you soon.');
});

// Reservation Routes
Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/success', [App\Http\Controllers\ReservationController::class, 'success'])->name('reservation.success');

Route::get('/admin/reservations', [App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin.reservations.index');
Route::get('/admin/reservations/{id}', [App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin.reservations.show');
Route::put('/admin/reservations/{id}', [App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin.reservations.update');
Route::delete('/admin/reservations/{id}', [App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin.reservations.destroy');


// ==================== DEBUG ROUTES ====================

// Debug Route - Check Database
Route::get('/debug-db', function () {
    echo "<h1>Database Debug Info</h1>";
    
    // Check database connection
    try {
        DB::connection()->getPdo();
        echo "✅ Database connected successfully<br>";
    } catch (Exception $e) {
        echo "❌ Database connection failed: " . $e->getMessage() . "<br>";
        return;
    }
    
    // Check table exists
    if (Schema::hasTable('reservations')) {
        echo "✅ Reservations table exists<br>";
        
        // Check columns
        $columns = Schema::getColumnListing('reservations');
        echo "✅ Table columns: " . implode(', ', $columns) . "<br>";
        
        // Check data count
        $count = DB::table('reservations')->count();
        echo "✅ Total reservations in database: " . $count . "<br>";
        
        if ($count > 0) {
            $reservations = DB::table('reservations')->get();
            echo "<h3>Raw Data:</h3>";
            foreach ($reservations as $res) {
                echo "<pre>";
                print_r($res);
                echo "</pre>";
            }
        } else {
            echo "❌ No data found in reservations table!<br>";
        }
        
    } else {
        echo "❌ Reservations table does not exist!<br>";
    }
});

// Test Route - Add Sample Data
Route::get('/add-test-reservation', function () {
    try {
        DB::table('reservations')->insert([
            'name' => 'Test Customer',
            'email' => 'test@example.com',
            'phone' => '03161103616',
            'date' => '2024-11-26',
            'time' => '19:00',
            'guests' => 4,
            'special_request' => 'Test reservation',
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        echo "✅ Test reservation added successfully!";
        
    } catch (Exception $e) {
        echo "❌ Error: " . $e->getMessage();
    }
});

// Quick Debug Route
Route::get('/check-data', function () {
    echo "<pre>";
    echo "=== RESERVATIONS DATA CHECK ===\n\n";
    
    try {
        $count = App\Models\Reservation::count();
        echo "Total Reservations: $count\n\n";
        
        if($count > 0) {
            $reservations = App\Models\Reservation::all();
            foreach($reservations as $res) {
                echo "ID: {$res->id}\n";
                echo "Name: {$res->name}\n";
                echo "Email: {$res->email}\n";
                echo "Phone: {$res->phone}\n";
                echo "Date: {$res->date}\n";
                echo "Time: {$res->time}\n";
                echo "Guests: {$res->guests}\n";
                echo "Status: {$res->status}\n";
                echo "Request: " . ($res->special_request ?? 'None') . "\n";
                echo "Created: {$res->created_at}\n";
                echo "------------------------\n";
            }
        } else {
            echo "No reservations found! Please make a reservation first.\n";
        }
        
    } catch(Exception $e) {
        echo "ERROR: " . $e->getMessage() . "\n";
    }
    
    echo "</pre>";
});