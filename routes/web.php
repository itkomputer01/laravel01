<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\Parameter;


Route::get('/Param/top', [Parameter::class, 'index']);
Route::get('/',[UserController::class,'index']);


Route::get('/User/about',[UserController::class,'about']);

Route::get('/User/produk',[UserController::class,'produk']);

Route::get('/User/create',[UserController::class,'create']);
Route::post('/User/postreg',[UserController::class,'postreg']);
Route::delete('/User/{id}',[UserController::class,'hapusreg']);

Route::get('/User/edit/{id}',[UserController::class,'editreg']);
Route::put('/User/{id}',[UserController::class,'updatereg']);
//produk
Route::post('/User/inputproduk',[UserController::class,'inputproduk']);









