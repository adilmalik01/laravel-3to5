<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProductController::class, 'fetchData']);

Route::get('/delete/{id}', [ProductController::class, 'DeleteProduct']);

Route::get('/product/{id}', [ProductController::class, 'DetailProduct']);

Route::get('/show-form', [ProductController::class, "showForm"]);

Route::post('/submit-form', [ProductController::class, 'submitHandler']);
