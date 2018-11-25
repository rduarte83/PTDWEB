<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $dir = "template/";

    /**
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

    /**
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



    // Registo
    public function register(){
        return view( "register");
    }

    // Login

    public function login(){
        return $this->profilePage("perfil");
    }

    /**
     * Product
     */
    public function loja(){ // All products
        return view( "products");
    }

    public function product(){ // Product Details
        return view( "product");
    }

    /*
     * Profile
     **/
    public function profile(){
        return view( "profile")->with("page", "perfil");
    }

    public function profilePage($page){
        switch ($page){
            case "favoritos":
                return view( "profile/favourites")->with("page", "favoritos");
                break;
            case "historico":
                return view( "profile/history")->with("page", "historico");
                break;
            case "perfil":
                return view( "profile/info")->with("page", "perfil");
                break;
            default:
                return view( "profile")->with("page", "perfil");
                break;
        }
    }

    /**
     * Carrinho
     */

    public function carrinhoPage($page){
        switch ($page){
            case "detalhes":
                return view( "carrinho/detalhes")->with("page", "detalhes");
                break;
            case "resumo":
                return view( "carrinho/resumo")->with("page", "resumo");
                break;
            case "final":
                return view( "carrinho/final")->with("page", "final");
                break;
            default:
                return view( "carrinho/carrinho")->with("page", "carrinho");
                break;
        }
    }
    public function carrinhoDetalhes(){
        return view("carrinho/carrinho")->with("page", "carrinho");
    }

    public function carrinhoFinal(){
        return view($this->someDir . "historico-compras");
    }

    public function carrinhoResumo(){
        return view($this->someDir . "historico-compras");
    }

    /* Testes AP*/
    private $someDir = "includes/";
    public function logincliente(){
        return view($this->someDir . "login-cliente");
    }
    public function registocliente(){
        return view($this->someDir . "registo-cliente");
    }
    public function homecarrinho(){
        return view($this->someDir . "home-carrinho");
    }
    public function historicoCompras(){
        return view($this->someDir . "historico-compras");
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

}
