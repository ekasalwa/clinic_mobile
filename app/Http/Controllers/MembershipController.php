<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /*** Fungsi untuk membaca page Membership ***/
    public function addNewMembership()
    {
        return view('homepage.membership');
    }

    /*** Fungsi untuk menyimpan membership dari page membership homepage ***/
    public function storeUser(Request $request)
    {
        $input = $request->input();
        $membership = new Membership();
        $membership->name =  $request->name;
        $membership->no_phone =  $request->no_phone;
        $membership->email =  $request->email;
        $membership->birthday = $request->birthday;
        $membership->gender = $request->gender;
        $membership->address =  $request->address;
        $membership->valid_status =  $request->valid_status;
        $membership->point =  $request->point;

        $membership->save();
        return back()->with('success', 'Registered Membership successfully!');
    }
}
