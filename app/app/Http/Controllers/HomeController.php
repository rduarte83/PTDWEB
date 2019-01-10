<?php

namespace App\Http\Controllers;

use App\BotijaCompra;
use App\Carrinho;
use App\Compra;
use App\Maquina;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

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

    /**
     *
     * Homepage
     *
     */
    public function index(){
        $botijas = BotijaCompra::orderBy("quantidade", "desc")->get();
        $botijaTemplate = array(
            "id" =>  0,
            "count" => 0
        );
        $totalBotija = array();
        foreach( $botijas as $botija ) {
            $botijaTemplate["id"] = $botija->botijasid;
            $botijaTemplate["count"] += $botija->quantidade;
            $totalBotija[$botija->botijasid] = $botijaTemplate;
        }

        return view("home")->with('botijas', $totalBotija);
    }

    public function mapa()
    {
        $maquinas = Maquina::get();

        return view("mapa")->with("maquinas", $maquinas);
    }

    public function  about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
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
        return view( "profile/info")->with("page", "perfil");
    }




    /**
     * Carrinho
     */
    public function carrinhoPage($page){
        $user = 1;//ESTATICO REMOVER!!!!!!
        $data["carrinho"] = Carrinho::all()->where('utilizador', $user)->first();

        switch ($page){
            case "detalhes":
                $data["page"]="detalhes";
                return view( "carrinho/detalhes")->with($data);
                break;
            case "resumo":
                $data["page"]="resumo";
                return view( "carrinho/resumo")->with($data);
                break;
            case "final":
                $data["compra"] = Compra::all()->where('utilizador', $user)->last();
                $data["page"]="final";
                return view( "carrinho/final")->with($data);
                break;
            default:
                $data["page"]="carrinho";
                return view( "carrinho")->with($data);
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

    // Style Guide
    public function StyleGuide(){
        return view("styleGuides/". "index");

    }

}
