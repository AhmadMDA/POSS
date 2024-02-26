<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[HomeController::class,'home']);

Route::prefix('products')->group(function () {
    Route::get('/products', [ProductController::class,'products']);
    Route::get('/category/food-beverage', [ProductController::class,'food_beverage']);
    Route::get('/category/beauty-health', [ProductController::class,'beauty_health']);
    Route::get('/category/home-care', [ProductController::class,'home_care']);
    Route::get('/category/baby-kid', [ProductController::class,'baby_kid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class,'user']);
Route::get('/pos', [POSController::class,'pos']);

   
