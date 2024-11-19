<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class MembershipController extends Controller
{
    /*** Fungsi untuk membaca page Membership ***/
    public function index()
    {
        return view('page.membership');
    }

    /*** Fungsi untuk menyimpan membership dari page membership homepage ***/
    public function store(Request $request)
    {
        if (!$request->has('gender')) {
            return back()->with('error', 'Failed, please select your gender.');
        }

        $birthday = Carbon::parse($request->birthday);
        $age = Carbon::now()->diffInYears($birthday);

        if ($age < 18) {
            throw ValidationException::withMessages([
                'birthday' => 'You must be at least 18 years old.',
            ]);
        }

        $input = $request->input();
        $membership = new Membership();
        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->address =  $request->address;

        $membership->save();
        if ($membership->save()) {
            return back()->with('success', 'Registered Membership successfully!');
        } else {
            return back()->with('error', 'Failed to register membership. Please try again.');
        }
    }
}
