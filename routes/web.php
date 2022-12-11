<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/home',[HomeController::class,'home'])->middleware(['auth','is_admin']);


Route::controller(AuthController::class)->group(
    function () {
        Route::get('login/{acc_type?}','login_page');
        Route::post('login/{acc_type?}','login');
    }
);

