<?php

// Template Routes
Route::get('/template/', "HomeController@indexTemplate");
Route::get('/template/index', "HomeController@indexTemplate");
Route::get('/template/about', "HomeController@aboutTemplate");
Route::get('/template/blog', "HomeController@blogTemplate");
Route::get('/template/blog-detail', "HomeController@blogDetailTemplate");
Route::get('/template/cart', "HomeController@cartTemplate");
Route::get('/template/contact', "HomeController@contactTemplate");
Route::get('/template/home-02', "HomeController@home02Template");
Route::get('/template/home-03', "HomeController@home03Template");
Route::get('/template/product', "HomeController@productTemplate");
Route::get('/template/product-detail', "HomeController@productDetailTemplate");

// Routes Project
Route::get('/', "HomeController@index");
Route::get('/index', "HomeController@index");
Route::get('/mapa', "HomeController@mapa");
Route::get('/loja', "HomeController@loja");
Route::get('/about', "HomeController@about");
Route::get('/blog', "HomeController@blog");
Route::get('/blog-detail', "HomeController@blogDetail");
Route::get('/cart', "HomeController@cart");
Route::get('/contact', "HomeController@contact");
Route::get('/product', "HomeController@product");
Route::get('/products', "HomeController@product");
Route::get('/product-detail', "HomeController@productDetail");
Route::get('/perfil', "HomeController@profile");
Route::get('/perfil/{page}', "HomeController@profilePage");


// Carrinho
//Route::get("/carrinho", "HomeController@carrinhoDetalhes");
Route::get("/carrinho", "CarrinhoController@index");
Route::get("/carrinho/{page}", "HomeController@carrinhoPage");


// teste AP
Route::get('/login-cliente', 'HomeController@logincliente' );
Route::get('/registo-cliente', 'HomeController@registocliente' );
Route::get('/home-carrinho', 'HomeController@homecarrinho' );
Route::get('infoTeste', 'UtilizadorControlador@index');


// User
Route::get('/registar', "HomeController@register");
Route::get('/login', "UserController@loginView");

// Products
//Route::get('/products/', "ProductController@showAll");
//Route::get('/products/{id}', "ProductController@show");
Route::get('/products/add/{id}', "ProductController@addToCart");

// User Autentication
Route::post('/register', "UserController@create");
Route::post('/login', "HomeController@login");


// UI
Route::get('/ui', "HomeController@ui");
Route::get('/ui/product', "HomeController@uiProduct");
Route::get('/ui/header', "HomeController@uiHeader");
Route::get('/ui/footer', "HomeController@uiFooter");

// StyleGuide
Route::get('/styleGuide', "HomeController@StyleGuide");



