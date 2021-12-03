<?php

use App\Http\Controllers\CertCreatorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Mail\SendInfo;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');});
    // ->middleware("adminCheck");
Route::get('/home', [EventController::class,'eventlist']);

Route::get('/myEvents', [EventController::class,'myEventlist']);


// auth
Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/registration', function () {
    return view('auth.registration');
});
Route::post('/registration',[UserController::class,'registration']);




// admin
Route::get('/admin', function () {
    return view('admin/adminDashboard');
});
Route::get('/participantlist', function () {
    return view('admin/participantList');
});
Route::get('/mailbox', function () {
    return view('admin/mailbox');
});


// event
Route::get('/createEvent', function () {
    return view('admin/createEvent');
});
Route::post('/createEvent',[EventController::class,'createEvent']);



// participate
Route::get('detail/{id}',[EventController::class,'detail']);
Route::post('participate',[RecordController::class,'participate']);


//payment
Route::get('pay', function () {
    return view('payment/pay');
});
Route::post('transactionInfo', [PaymentController::class,'transactionInfo']);

Route::get('verify/{paymentToken}', [PaymentController::class,'verifyPayment']);


//mail
Route::post('/sendmailfrombox',[MailController::class,'sendmailfrombox']);

// certificate create
Route::get('/createCerti',[CertCreatorController::class,'createCertificates']);
// certificate send
Route::get('sendtopaidusers',[MailController::class,'sendtopaidusers']);
Route::get('/sendCerti',[MailController::class,'sendtopaidusers']);




// admin
Route::get('registrationlist',[RecordController::class,'registrationlist']);
