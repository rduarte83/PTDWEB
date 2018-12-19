<?php

namespace App\Http\Controllers;

use App\Product;
use App\Botija;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_detail($id)
    {
        $botija = Botija::whereid($id)->first();
        $title = $botija->nome;
        return view("product", compact("title"), compact("botija"));
    }

    public function index()
    {
        $botijas = Botija::all();
        $n_res = count($botijas);

        $marcas = Botija::distinct()->get(['marca']);
        $categorias = Botija::distinct()->get(['tipo']);

        return view("products", compact('botijas'), compact("marcas"))->with("categorias", $categorias)->with("title", "Loja")->with("n_res", $n_res);
    }

    public function search_marca($marca)
    {
        $botijas = Botija::where('marca', 'ilike', $marca)->get();
        $n_res = count($botijas);
        
        $marcas = Botija::distinct()->get(['marca']);
        $categorias = Botija::distinct()->get(['tipo']);

        return view("products", compact('botijas'), compact("marcas"))->with("categorias", $categorias)->with("title", "Produtos " . $marca)->with("n_res", $n_res);
    }
}
