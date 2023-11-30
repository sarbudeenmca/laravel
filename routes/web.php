<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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


#---- View
//with params
Route::get('/home/{id?}/{title2?}', function ($id = null, $title2 = null) {
    $title1 = "First";
    return view('home', compact('title1', 'title2', 'id'));
    // return view('home')->withTitle1($title1)->withTitle2($title2); //magic method
})->name('home');

Route::get('/contact', function () {
    return view('contact');
});

//view method
Route::view('menu', 'menu');

#---- Redirect and other

Route::post('get_userdata', function (Request $req) {
    //dd($userRequest->all()); #dd - Dump and Die
    $name = $req->input('name');
    $email = $req->input('email');
    $mobile = $req->input('mobile');
    // return "Your Name: " . $name . "<br> Email: " . $email . "<br>Mobile: " . $mobile;
    return redirect('/')->with('message', 'Form Successfully Submitted');
});

// ->middleware this is chain method
Route::get('month/{num}', function ($num) {
    $month = "";
    if ($num == 1) {
        $month = "January";
    } else if ($num == 2) {
        $month = "Febraury";
    } else if ($num == 3) {
        $month = "March";
    } else if ($num == 4) {
        $month = "April";
    }
    return '<h2>' . $month . '</h2>';
})->middleware('month');

#---- Rout Group
Route::prefix('gallery')->group(function () {
    Route::get('photos', function () {
        return '<h2>Photo Gallery</h2>';
    });
    Route::get('videos', function () {
        return '<h2>Video Gallery</h2>';
    });
    Route::get('docs', function () {
        return '<h2>Documents Gallery</h2>';
    });
});


#---- Rout Group with middleware
/*
Route::prefix('gallery')->middleware('middlewareName')->group(function () {
    Route::get('photos', function () {
        return '<h2>Photo Gallery</h2>';
    });
    Route::get('videos', function () {
        return '<h2>Video Gallery</h2>';
    });
    Route::get('docs', function () {
        return '<h2>Documents Gallery</h2>';
    });
});
*/

#---- Route using controller

Route::get('login', [LoginController::class, 'login_form']);
Route::get('forgot_password', [LoginController::class, 'forgot_password']);
Route::post('post/{otp}', [PostController::class, 'postOTP']);
