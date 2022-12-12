<?php
use App\Http\Controllers\Acc_type_select;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MVDController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'acc_type_select');
Route::get('acc_type_select', [Acc_type_select::class, 'index']);

Route::group(['controller'=>HomeController::class,'middleware'=>['auth']],function () {
    Route::get('home', 'home');
    Route::get('dashboard','dashboard')->middleware('is_admin:home');
});

Route::get('home/{page?}', [MVDController::class, 'mvd'])->middleware('auth');


Route::group(['controller'=>AuthController::class,'middleware'=>'valid_acc_type'],
    function () {
        Route::get('login/{acc_type?}', 'login_page');
        Route::post('login/{acc_type?}', 'login');
        Route::get('logout/{id?}', 'logout');
    }
);


Route::controller(RegisterController::class)->group(function () {
    
    Route::middleware('valid_acc_type')->group(function(){
        Route::get('register/{acc_type?}', 'register_page');
        Route::post('register/{acc_type?}', 'register');
    });
   
    Route::post('register_book','register_book');
});
