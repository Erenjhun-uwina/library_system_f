<?php

use App\Http\Controllers\Acc_type_select;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'acc_type_select');
Route::get('acc_type_select',[Acc_type_select::class,'index']);

Route::get('/home', [HomeController::class, 'home'])->middleware(['auth', 'is_admin']);

Route::controller(AuthController::class)->group(
    function () {
        Route::get('login/{acc_type?}', 'login_page');
        Route::post('login/{acc_type?}', 'login');
        Route::get('logout/{id?}','logout');
    }
)->middleware(['valid_acc_type']);


Route::controller(RegisterController::class)->group(function () {

    Route::get('register/{acc_type?}', 'register_page')->middleware('valid_acc_type');
});
