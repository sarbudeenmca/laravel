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
    $title1 = "Title 1";
    $title2 = "Title 2";
    return view('home', compact('title1', 'title2'));
    // return view('home')->withTitle1($title1)->withTitle2($title2); //magic method
});

Route::post('get_userdata', function (Request $req) {
    //dd($userRequest->all()); // dd - Dump and Die
    $name = $req->input('name');
    $email = $req->input('email');
    $mobile = $req->input('mobile');
    // return "Your Name: " . $name . "<br> Email: " . $email . "<br>Mobile: " . $mobile;
    return redirect('/')->with('message', 'Form Successfully Submitted');
});

Route::get('/contact', function () {
    return view('contact');
});
