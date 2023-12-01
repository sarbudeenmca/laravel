<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonthController;
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

#---- Blade Template routes
Route::view('/', 'home');
Route::view('/contact', 'contact');
#---- Other Examples

#---- View
//with params
Route::get('/home_old/{id?}/{title2?}', function ($id = null, $title2 = null) {
    $title1 = "First";
    return view('home_old', compact('title1', 'title2', 'id'));
    // return view('home')->withTitle1($title1)->withTitle2($title2); //magic method
})->name('home');

Route::get('/contact_us', function () {
    return view('contact_us');
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
        $month = "Jan";
    } else if ($num == 2) {
        $month = "Feb";
    } else if ($num == 3) {
        $month = "Mar";
    } else if ($num == 4) {
        $month = "Apr";
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
Route::get('post/{otp}', [PostController::class, 'postOTP']);
Route::get('year/{year}', [PostController::class, 'postYear']);
Route::get('monthfull/{num}', [MonthController::class, 'numberToMonth']);
