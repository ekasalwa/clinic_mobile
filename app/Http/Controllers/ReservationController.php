<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /*** Fungsi untuk membaca page Appointment/Reservation ***/
    public function index()
    {
        $treatments = Treatment::where('show_status', 1)
        ->orderBy('name')
        ->get();

        return view('page.appointment', compact('treatments'));
    }

    /*** Fungsi untuk menyimpan reservation dari page reservation homepage ***/
    public function store(Request $request)
    {
        if (!$request->has('gender')) {
            return back()->with('error', 'Failed, please select your gender.');
        }

        if (!$request->has('location')) {
            return back()->with('error', 'Failed, please select your location.');
        }

        $tomorrow = Carbon::now()->addDay()->format('Y-m-d');
        if ($request->date < $tomorrow) {
            return back()->with('error', 'The appointment must be at least 1 day from today.');
        }

        $input = $request->input();
        $reservation = new Reservation();
        $reservation->name =  $request->name;
        $reservation->date =  $request->date;
        $reservation->age = $request->age;
        $reservation->gender = $request->gender;
        $reservation->phone_number = $request->phone_number;
        $reservation->treatment_id =  $request->treatment_id;
        $reservation->doctor =  $request->doctor;
        $reservation->location =  $request->location;

        $reservation->save();
        return back()->with('success', 'Appointment saved successfully!');
    }
}
