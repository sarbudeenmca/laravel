<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postData()
    {
        return ("<h1>Post Data from PostController</h1>");
    }

    public function postOTP($otp)
    {
        return ("<h1>OTP is $otp from PostController</h1>");
    }

    public function postYear($year)
    {
        return ("<h1>Current year is $year</h1>");
    }
}
