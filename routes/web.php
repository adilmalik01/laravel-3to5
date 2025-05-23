<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/show-form',[ProductController::class,"showForm"]);

Route::post('/submit-form', [ProductController::class,'submitHandler']);

Route::get('/products', [ProductController::class,'fetchData']);