<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

Route::get('/home',[HomeController::class,'index']);

Route::prefix('products')->group(function () {
    Route::get('/products', [ProductController::class,'index']);
    Route::get('/category/food-beverage', [ProductController::class,'food_beverage']);
    Route::get('/category/beauty-health', [ProductController::class,'beauty_health']);
    Route::get('/category/home-care', [ProductController::class,'home_care']);
    Route::get('/category/baby-kid', [ProductController::class,'baby_kid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class,'show']);

Route::get('/pos', [POSController::class,'index']);


Route::get('/level',[LevelController::class,'index']);

Route::get('/Kategori',[KategoriController::class,'index']);

Route::get('/user',[UserController::class,'index']);


   
