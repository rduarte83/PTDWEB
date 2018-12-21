<?php

namespace App\Http\Controllers;

use App\Product;
use App\Botija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $marca = Input::get('marca', "todas");
        $categoria = Input::get('categoria', "todas");

        if($marca != "todas" && $categoria != "todas")
        {
            if($marca != "todas" && $categoria == "todas")
            {
                $botijas = Botija::where("marca", $marca)->get();
            }
            elseif($marca == "todas" && $categoria != "todas")
            {
                $botijas = Botija::where("tipo", $categoria)->get();
            }
            else
            {
                $botijas = Botija::where("marca", $marca)->where("tipo", $categoria)->get();
            }
        }
        else
        {
            $botijas = Botija::all();
        }

        $n_res = count($botijas);
        //$n_res = $marca . $categoria;

        $marcas = Botija::distinct()->get(['marca']);
        $categorias = Botija::distinct()->get(['tipo']);

        return view("products", compact('botijas'), compact("marcas"))->with("categorias", $categorias)->with("title", "Loja")->with("n_res", $n_res);
    }
}
