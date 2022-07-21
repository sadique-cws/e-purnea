<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BusinessController,HomeController,AuthController};


Route::get("/",[HomeController::class,"homepage"])->name("homepage");



Route::resource('business', BusinessController::class);


Route::middleware('auth')->group(function () {
    Route::get("/add-business",[HomeController::class,"add_biz"])->name("add.biz");
});




// authcontroller routes
Route::controller(AuthController::class)->group(function () {
    Route::match(['post','get'],'/login', 'login')->name("login");
    Route::match(['post','get'],'/register', 'register')->name("register");
    Route::get('/logout', 'logout')->name("logout");
});