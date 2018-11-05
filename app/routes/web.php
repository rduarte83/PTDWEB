<?php

// Home
Route::get('/', function () {
    return view('home');
});

// User
Route::get('/register', "UserController@registerView");
Route::get('/login', "UserController@loginView");
Route::get('/admin', "UserController@adminView");

// Products
Route::get('/products/', "ProductController@showAll");
Route::get('/products/{id}', "ProductController@show");
Route::get('/products/add/{id}', "ProductController@addToCart");

// User Autentication
Route::post('/register', "UserController@create");
Route::post('/login', "UserController@login");

// Telemoveis
/*Route::get("/telemovel/show", "TelemovelController@showAll");
Route::get("/telemovel/show/{id}", "TelemovelController@show");
Route::get("/telemovel/create", "TelemovelController@create");
Route::post("/telemovel/store", "TelemovelController@store");*/
