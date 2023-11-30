<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form()
    {
        return "<h1>Login Form</h1>";
    }

    public function login_process(){
        return "<h1>Login Process</h1>";
    }

    public function forgot_password(){
        return "<h1>Forgot Password</h1>";
    }
}
