<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $reservations = Reservation::latest()->get();
        return view('admin.reservation.index', compact('reservations'));
    }

    public function update(Request $request, $id) {

        $reservation = Reservation::find($id);

        if($request->status == 'Prihvati') {

            $reservation->update(['status' => 'Potvrdjen']);
        }
        if($request->status == 'Odbij') {

            $reservation->update(['status' => 'Odbijen']);
        }

        return redirect()->back();
    }


    public function checkReservation()
    {

        $reservations = Reservation::where('status', 'Cekanje')->get();

        if ($reservations && sizeof($reservations) > 0) {
            return 'true';
        } else {
            return 'false';
        }
    }
    public function delete(){
        Reservation::truncate();
        return redirect()->back();

    }
}
