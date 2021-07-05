<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Models\laraveltest;

Route::get('/',[HelloController::class,'index']);
Route::post('/hello',[HelloController::class,'thanks']);