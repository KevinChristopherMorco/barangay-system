<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function requestClearance()
    {
        return view('request.clearance');
    }

    public function requestOath()
    {
        return view('request.oath');
    }

    public function requestCertificate()
    {
        return view('request.certificate');
    }
}
