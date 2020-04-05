<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $reservations = Reservation::paginate(10);
        return view('admin/reservations/all', [
            'reservations' => $reservations
        ]);
    }

    public function edit($id) {
        $reservation = Reservation::find($id);
        return view('admin/reservations/edit', [
            'reservation' => $reservation
        ]);
    }
        
    public function update($id) {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests' => ['required', 'integer'],
            'time' => ['required'],
        ]);
        $reservation = Reservation::find($id);
        $reservation->name = request('name');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests = request('guests');
        $reservation->time = request('time');
        $reservation->save();
        return redirect('/admin/reservations');
    }

    public function delete($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('admin/reservations');
    }
}