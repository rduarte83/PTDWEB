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
Route::get('/mapa/{nome}', "HomeController@mapa_search");
Route::get('/loja', "ProductController@index");
Route::get('/about', "HomeController@about");
Route::get('/blog', "HomeController@blog");
Route::get('/blog-detail', "HomeController@blogDetail");
Route::get('/cart', "HomeController@cart");
Route::get('/contact', "HomeController@contact");

// Perfil
Route::get('/perfil', "UtilizadorController@index")->middleware('auth');
Route::get('/perfil/{page}', "UtilizadorController@profilePage")->middleware('auth');
Route::get('/perfil/editar', "UtilizadorController@edit")->middleware('auth');
Route::post('/perfil/edit', "UtilizadorController@update")->middleware('auth');

// Header - Atualiza Carrinho
Route::get("/carrinho-header/atualiza", "CarrinhoController@atualizaCarrinho");

//Pesquisa
Route::post('/search', "ProductController@search");
Route::post('/loja', "ProductController@index");

// Carrinho
Route::get("/carrinho", "CarrinhoController@index");
Route::post("/carrinho/add", "CarrinhoController@store");
Route::post("/carrinho/remove", "CarrinhoController@remove");
Route::post("/carrinho/update", "CarrinhoController@update");
Route::post("/carrinho/destroy", "CarrinhoController@destroy");
Route::get("/carrinho/{page}", "HomeController@carrinhoPage"); // TODO: MUDAR ISTO PARA CONTROLLER Carrinho
Route::post('/carrinho/detalhes', 'CarrinhoController@saveDetalhes');
Route::post('/carrinho/compra', 'CompraController@store')->middleware('auth');
Route::post('/carrinho/final', 'CompraController@final')->middleware('auth');

// Favourits
Route::post("/favoritos/addRemove" , 'ProductController@AddRemfavoritos');

// User Authentication
Route::get('/registar', 'HomeController@register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/register', "UtilizadorController@store");
Route::get('/info', 'UtilizadorController@index');

// Produtos
Route::get('/produto/{id}', "ProductController@product_detail");


// Só usar quando é Preciso ter login efectuado!
Route::get('/user', "HomeController@index")->middleware('auth');

// UI
Route::get('/ui', "HomeController@ui");
Route::get('/ui/product', "HomeController@uiProduct");
Route::get('/ui/header', "HomeController@uiHeader");
Route::get('/ui/footer', "HomeController@uiFooter");

// StyleGuide
Route::get('/styleGuide', "HomeController@StyleGuide");


// teste AP
/*Route::get('/login-cliente', 'HomeController@logincliente' );
Route::get('/registo-cliente', 'HomeController@registocliente' );
Route::get('/home-carrinho', 'HomeController@homecarrinho' );
Route::get('/info', 'UtilizadorController@index');
Route::get('/register/eliminarUtilzador/{id}', "UtilizadorController@destroy");
Route::get('/register/editarUtilzador/{id}', "UtilizadorController@edit");*/


