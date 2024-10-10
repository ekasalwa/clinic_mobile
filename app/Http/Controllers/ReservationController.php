<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /*** Fungsi untuk membaca page Appointment/Reservation ***/
    public function addAppointment()
    {
        $treatments = Treatment::where('show_status', 1)
        ->orderBy('name')
        ->get();

        return view('homepage.appointment', compact('treatments'));
    }

    /*** Fungsi untuk menyimpan reservation dari page reservation homepage ***/
    public function storeUser(Request $request)
    {
        $input = $request->input();
        $reservation = new Reservation();
        $reservation->name =  $request->name;
        $reservation->date =  $request->date;
        $reservation->age = $request->age;
        $reservation->gender = $request->gender;
        $reservation->phone_number = $request->phone_number;
        $reservation->status = $request->status;
        $reservation->treatment_id =  $request->treatment_id;
        $reservation->doctor =  $request->doctor;
        $reservation->location =  $request->location;
        $reservation->payment_status =  $request->payment_status;

        $reservation->save();
        return redirect('payments.index');
        // return back()->with('success', 'Appointment saved successfully!');
    }
}
