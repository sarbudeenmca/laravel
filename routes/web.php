<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('contact');
});

Route::get('/user_form', function () {
    $page_title = "Send User information";
    return view('user_form',  ['page_title' => $page_title]);
});

Route::post('get_userdata', function (Request $req) {
    //dd($userRequest->all()); // dd - Dump and Die
    $name = $req->input('name');
    $email = $req->input('email');
    $mobile = $req->input('mobile');
    // return "Your Name: " . $name . "<br> Email: " . $email . "<br>Mobile: " . $mobile;

    return redirect('user_form')->with('message', 'Form Successfully Submitted');
});
