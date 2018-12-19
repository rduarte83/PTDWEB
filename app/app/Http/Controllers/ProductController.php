<?php

namespace App\Http\Controllers;

use App\Product;
use App\Botija;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
