<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','acc_type_select');

Route::get('/home',[HomeController::class,'home'])->middleware(['auth','is_admin']);

Route::controller(AuthController::class)->group(
    function () {
        Route::get('login/{acc_type?}','login_page');
        Route::post('login/{acc_type?}','login');
    }
)->middleware(['valid_acc_type']);


Route::get('register/{acc_type?}',[RegisterController::class,'register_page'])->middleware('valid_acc_type');
