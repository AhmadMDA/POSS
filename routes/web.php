<?php


use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index');

Route::prefix('products')->group(function () {
    Route::get('/', 'ProductController@index');
    Route::get('/category/food-beverage', 'ProductController@foodBeverage');
    Route::get('/category/beauty-health', 'ProductController@beautyHealth');
    Route::get('/category/home-care', 'ProductController@homeCare');
    Route::get('/category/baby-kid', 'ProductController@babyKid');
});

Route::get('/user/{id}/name/{name}', 'UserController@show');
Route::get('/pos', 'POSController@index');

   
