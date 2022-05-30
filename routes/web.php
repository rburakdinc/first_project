<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\deneme2;




Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('index');
Route::post('/create',[\App\Http\Controllers\UserController::class,'create'])->name('create');
Route::get('/login',[\App\Http\Controllers\UserController::class,'loginIndex'])->name('loginIndex');
Route::post('/loginPost',[\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::get('/loginPost',[\App\Http\Controllers\UserController::class,'login'])->name('login');
