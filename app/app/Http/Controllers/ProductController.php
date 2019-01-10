<?php

namespace App\Http\Controllers;

use App\Favorito;
use App\Product;
use App\Botija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{

    private $response = array(
        'status' => 'success',
        'message' => 'Produto adicionado ao carrinho.',
    );

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

        $categoria =  $request->input('categoria');
        $marca =  $request->input('marca');

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
            "categoriaSelected" => "todas",
            "marcaSelected" => "todas",

        ];
        return view("products")->with($response);
    }

    public function index(Request $request)
    {
        $marca = $request->get('marca', "todas");
        $categoria = $request->get('categoria', "todas");
        $sort =  intval($request->get('sorting', -1));
        $sorting = "asc";
        if( $sort == 0 ) $sorting = "asc";
        else if( $sort == 1 ) $sorting = "desc";
        else $sorting = "asc";

        if($marca != "todas" || $categoria != "todas" )
        {
            if($marca != "todas" && $categoria == "todas")
            {
                $botijas = Botija::orderBy("preco", $sorting)
                            ->where("marca", 'ILIKE', "%".$marca."%")
                            ->get();
            }
            elseif($marca == "todas" && $categoria != "todas")
            {
                $botijas = Botija::orderBy("preco", $sorting)
                            ->where("tipo" , 'ILIKE', "%".$categoria."%")
                            ->get();
            }
            else
            {
                $botijas = Botija::orderBy("preco", $sorting)
                            ->where("tipo", 'ILIKE', "%".$categoria."%")
                            ->where("marca", 'ILIKE', "%".$marca."%")
                            ->get();
            }
        }
        else
        {
            $botijas = Botija::orderBy("preco", $sorting)
                ->get();
        }



        $n_res = count($botijas);
        //$n_res = $marca . $categoria;

        $marcas = Botija::distinct()->get(['marca']);
        $categorias = Botija::distinct()->get(['tipo']);

        $response = [
            "title" => "Loja",
            "botijas" => $botijas,
            "n_res" => $n_res,
            "marcas" => $marcas,
            "categorias" => $categorias,
            "categoriaSelected" => $categoria,
            "marcaSelected" => $marca,
            "sortedSelect" => $sort
        ];

        return view("products")->with($response);
    }

   public function filter(Request $request) {

    }

    /*
     * Favourites!
     */

    public function AddRemfavoritos(Request $request) {

        $user = $request->user();

        $productId = $request->input("productID");

        $hasFavourite = Favorito::where('utilizadoresid', $user->id)
                                ->where('botijasid',$productId)
                                ->first();

        if($hasFavourite != null){
            Favorito::where('utilizadoresid', $user->id)
                ->where('botijasid',$productId)
                ->update(['favorito' => !$hasFavourite->favorito]);

            $this->response["status"] = true;
            $this->response["message"] = $hasFavourite->favorito ? "Produto removido aos favoritos" : "Produto adiconado aos favoritos";
            $this->response["favorito"] = !$hasFavourite->favorito;

            return Response::json($this->response);
        }

        $favorito = new Favorito();
        $favorito->utilizadoresid = $user->id;
        $favorito->botijasid = $productId;
        $favorito->favorito = true;
        $favorito->save();

        $this->response["status"] = true;
        $this->response["message"] = "Produto adiconado aos favoritos";
        $this->response["favorito"] = true;
        return Response::json($this->response);
    }
}
