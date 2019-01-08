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

        /* Carregar botijas relacionadas*/
        $botijas = Product::where("tipo", "$botija->tipo")->get();


        return view("product", compact("title"), compact("botija"))->with("botijasRelated",  $botijas);
    }

    public function search(Request $request)
    {
        $search =  $request->input('search-product');
        $res = Botija::query()
            ->where('tipo', 'ILIKE', "%".$search."%")
            ->orWhere('marca', 'ILIKE', "%".$search."%")
            ->orWhere('nome', 'ILIKE', "%".$search."%")->get();

        $n_res = count($res);
        //$n_res = $marca . $categoria;

        $marcas = Botija::distinct()->get(['marca']);
        $categorias = Botija::distinct()->get(['tipo']);

        $response = [
            "title" => "Search -" . $search,
            "botijas" => $res,
            "n_res" => $n_res,
            "marcas" => $marcas,
            "categorias" => $categorias,
        ];
        return view("products")->with($response);
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
