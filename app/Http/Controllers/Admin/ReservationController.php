<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.reservations', compact('reservations'));
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservation-show', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['status' => $request->status]);
        
        return redirect()->back()->with('success', 'Reservation status updated!');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        
        return redirect()->back()->with('success', 'Reservation deleted!');
    }
}