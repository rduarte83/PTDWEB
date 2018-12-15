<?php

namespace App\Http\Controllers;

use App\Botija;
use App\Carrinho;
use Illuminate\Http\Request;
use Session;

class BotijaController extends Controller
{

    public function getIndex()
    {
        $botija = Botija::all();
        return view( "botija/botija",['botija' => $botija])-> with("page", "botija");
    }

    public function GetAddToCart( Request $request, $id) {
        $botija = Botija::find($id);
        $oldCarrinho = Session::has('carrinho') ? Session::get('carrinho') : null;
        $carrinho = new Carrinho($oldCarrinho);
        $carrinho->add($botija, $botija->$id);

        $request->session()->put('carrinho', $carrinho);
        return redirect()->route('HomeController@index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Botija  $botija
     * @return \Illuminate\Http\Response
     */
    public function show(Botija $botija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Botija  $botija
     * @return \Illuminate\Http\Response
     */
    public function edit(Botija $botija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Botija  $botija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Botija $botija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Botija  $botija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Botija $botija)
    {
        //
    }
}
