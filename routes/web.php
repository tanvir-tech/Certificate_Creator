<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Mail\SendInfo;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/registration', function () {
    return view('auth/registration');
});

// auth
Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/registration', function () {return view('auth.registration');});
Route::post('/registration',[UserController::class,'registration']);


// event
Route::get('/createEvent', function () {
    return view('admin/createEvent');
});
Route::post('/createEvent',[EventController::class,'createEvent']);






//mail
Route::get('/send',[EventController::class,'sendtoall']);
// Route::get('/email', function () {
//     Mail::to('totopypy5@gmail.com')->send(new SendInfo());
//     return new SendInfo();
// });
