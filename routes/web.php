<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->middleware('is_admin');


Route::controller(LoginController::class)->group(
    function () {
        Route::get('login/{acc_type?}','login_page');
        Route::post('login/{acc_type?}','login');
    }
);
