<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BusinessController,HomeController};


Route::get("/",[HomeController::class,"homepage"])->name("homepage");
Route::get("/add-business",[HomeController::class,"add_biz"])->name("add.biz");



Route::resource('business', BusinessController::class);