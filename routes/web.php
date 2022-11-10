<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('users/', [UserController::class, 'index']);

Route::get('users/create', [UserController::class, 'create']);

Route::get('users/{id}', [UserController::class, 'show']);

Route::post('users/', [UserController::class, 'store']);

Route::get('clients/', [ClientController::class, 'index']);

Route::get('clients/create', [ClientController::class, 'create']);

Route::put('clients', [ClientController::class, 'update']);

Route::post('clients', [ClientController::class, 'store']);

Route::get('/prueba', function () {
    return view('login/');
})->middleware('auth');

Route::get('clients/edit/{id}', [ClientController::class, 'edit']);

Route::get('clients/{id}', [ClientController::class, 'show']);

Route::get('reservations/', [ReservationController::class, 'index']);

Route::get('reservations/create', [ReservationController::class, 'create']);

Route::get('reservations/{id}', [ReservationController::class, 'show']);

