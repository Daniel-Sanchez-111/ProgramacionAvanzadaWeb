<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    echo "hola";
});

Route::get('/saludo/{name}', function ($name) {
    echo "hola ".$name;
});

Route::get('/suma/{num1}/{num2}/{num3}?', function ($num1,$num2,$num3=0) {
    echo $num1+$num2+$num3;
})->where(['num1','[0-9]+'],['num2','[0-9]+']);
*/


Route::get('users/', [UserController::class, 'index']);

Route::get('users/create', [UserController::class, 'create']);

Route::get('users/{id}', [UserController::class, 'show']);

Route::post('users/', [UserController::class, 'store']);
