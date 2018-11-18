<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $dir = "template/";

    /*
     * Template
     */
    public function indexTemplate(){
        return view( $this->dir . "index");
    }

    public function  aboutTemplate(){
        return view( $this->dir ."about");
    }

    public function contactTemplate(){
        return view( $this->dir . "contact");
    }

    public function  productTemplate(){
        return view( $this->dir ."product");
    }

    public function productDetailTemplate(){
        return view( $this->dir . "product-detail");
    }

    public function  cartTemplate(){
        return view( $this->dir ."cart");
    }

    public function blogTemplate(){
        return view( $this->dir . "blog");
    }

    public function  blogDetailTemplate(){
        return view( $this->dir ."blog-detail");
    }

    /*
     * End Template
     */
    public function index()
    {
        return view( "home");
    }

    public function  about(){
        return view( "about");
    }

    public function contact(){
        return view( "contact");
    }

    public function product(){
        return view( "products");
    }

    public function productDetail(){
        return view($this->dir . "product-detail");
    }

    public function cart(){
        return view($this->dir . "cart");
    }

    public function blog(){
        return view($this->dir . "blog");
    }

    public function blogDetail(){
        return view($this->dir . "blog-detail");
    }

    public function home02(){
        return view($this->dir . "home-02");
    }

    public function home03(){
        return view($this->dir . "home-03");
    }

    /**
    * UI
    */
    public function uiFooter(){
        return view("ui/". "footer");
    }
    public function uiHeader(){
        return view("ui/". "header");
    }
    public function uiProduct(){
        return view("ui/". "product");
    }
    public function ui(){
        return view("ui/". "index");
    }

    /* Testes AP*/
    public function logincliente(){
        return view($this->dir . "login-cliente");
    }
    public function registocliente(){
        return view($this->dir . "registo-cliente");
    }
    public function homecarrinho(){
        return view($this->dir . "home-carrinho");
    }
    public function historicoCompras(){
        return view($this->dir . "historico-compras");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
