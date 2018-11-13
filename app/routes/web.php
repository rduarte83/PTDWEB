<?php

// Home
/*
Route::get('/', function () {
    return view('template/index');
});
*/

// Template Routes
Route::get('/', "HomeController@index");
Route::get('/index', "HomeController@index");
Route::get('/about', "HomeController@about");
Route::get('/blog', "HomeController@blog");
Route::get('/blog-detail', "HomeController@blogDetail");
Route::get('/cart', "HomeController@cart");
Route::get('/contact', "HomeController@contact");
Route::get('/home-02', "HomeController@home02");
Route::get('/home-03', "HomeController@home03");
Route::get('/product', "HomeController@product");
Route::get('/product-detail', "HomeController@productDetail");

// teste AP
Route::get('/login-cliente', 'HomeController@logincliente' );
Route::get('/registo-cliente', 'HomeController@registocliente' );
Route::get('/home-carrinho', 'HomeController@homecarrinho' );


// User
Route::get('/register', "UserController@registerView");
Route::get('/login', "UserController@loginView");

// Products
Route::get('/products/', "ProductController@showAll");
Route::get('/products/{id}', "ProductController@show");
Route::get('/products/add/{id}', "ProductController@addToCart");

// User Autentication
Route::post('/register', "UserController@create");
Route::post('/login', "UserController@login");

// UI
Route::get('/ui', "HomeController@ui");
Route::get('/product', "HomeController@uiProduct");
Route::get('/header', "HomeController@uiHeader");
Route::get('/footer', "HomeController@uiFooter");

// Telemoveis
/*Route::get("/telemovel/show", "TelemovelController@showAll");
Route::get("/telemovel/show/{id}", "TelemovelController@show");
Route::get("/telemovel/create", "TelemovelController@create");
Route::post("/telemovel/store", "TelemovelController@store");*/

