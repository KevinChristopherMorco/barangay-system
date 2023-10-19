<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function ordinance(){
        return view('guest.ordinance');
    }
    public function resolution(){
        return view('guest.resolution');
    }
    public function report(){
        return view('guest.report');
    }
    public function committee(){
        return view('guest.committee');
    }
}
