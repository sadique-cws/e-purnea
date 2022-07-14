<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BusinessController,HomeController,AuthController};


Route::get("/",[HomeController::class,"homepage"])->name("homepage");
Route::get("/add-business",[HomeController::class,"add_biz"])->name("add.biz");



Route::resource('business', BusinessController::class);


// authcontroller routes
Route::controller(AuthController::class)->group(function () {
    Route::match(['post','get'],'/login', 'login')->name("login");
    Route::match(['post','get'],'/register', 'register')->name("register");
    Route::get('/logout', 'logout')->name("logout");
});