<?php

use App\Events\UserRegistered;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\MeController;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::post('login', LoginController::class);
Route::post('register', RegisterController::class);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('me', [MeController::class, 'show']);
});

Route::post('email', function() {
    UserRegistered::dispatch();
    // Mail::to('test@test.com')->send(new WelcomeMail());
});
