<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\receiveController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/emails', [receiveController::class,'index']);
//Route::resource('settings', SettingController::class);




Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('email.send');
