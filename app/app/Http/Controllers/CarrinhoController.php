<?php

namespace App\Http\Controllers;

use App\BotijaCarrinho;
use App\Carrinho;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use function Sodium\add;


class CarrinhoController extends Controller
{

    private $response = array(
                'status' => 'success',
                'message' => 'Produto adicionado ao carrinho.',
            );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$carrinho = Carrinho::all();
        $data = [
            'page' => 'carrinho'
            //'objetosCarrinho' => $carrinho
        ];
        if ( !Auth::check() ){
            $data["carrinho"]=Session::get("carrinho");
        }else{
            $user = Auth::user();
            $data["carrinho"] = Carrinho::all()->where('utilizador', $user->id)->first();
        }

        return view( "carrinho/carrinho")-> with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function final(Request $request)
    {
        $user = Auth::user();
        $recolha = Compra::all()->where('utilizador' , $user->id)->last();

        if ($request->input('recolha') == 1) Compra::where('id', $recolha->id)->update(['local_recolha' => $request->input('local')]);
            //else Compra::where('id', $recolha->id)->update(['local_recolha' => ""]);

        return redirect('/perfil/historico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $productID = $request->input("productID");
        $quantidade = $request->input("quantidade");

        if(!Auth::check()) {
            // Work with sessions
            $carrinho = [];
            if (Session::has("carrinho")){
                $carrinho = Session::get("carrinho");
            }

            $alterado = false;
            foreach ($carrinho as $key=>$atual){
                if($atual["botijasid"] == $productID) {
                    $carrinho[$key]["quantidade"]+=$quantidade;
                    $alterado = true;
                    break;
                }
            }

            if(!$alterado) array_push($carrinho, array('botijasid' => $productID, "quantidade" =>$quantidade) );


            Session::put("carrinho", $carrinho);
            $this->response["carrinho"]=$carrinho;
            return Response::json($this->response);
        }

        $user = Auth::user();

        $carrinho = Carrinho::all()->where("utilizador", $user->id )->first();

        if($carrinho == null)
        {
            $carrinho = new Carrinho();
            $carrinho->utilizador = $user->id;
            $carrinho->save();
        }

        $regras = [
            'productID' => "required",
            'quantidade' => "required",
        ];
        $mensagens = [
            'required' => 'O Campo ":attribute" é de preenchimento obrigatório!',
        ];

        $request->validate($regras, $mensagens);

        $matchThese = ['botijasid' => intval($productID), 'carrinhosid' =>  $carrinho->id];
        $botijaCarrinho = BotijaCarrinho::where($matchThese)->first();

        if ( $botijaCarrinho == null  ){
            $botijaCarrinho = new BotijaCarrinho();
            $botijaCarrinho->botijasid = intval($productID);
            $botijaCarrinho->carrinhosid = $carrinho->id;
            $botijaCarrinho->quantidade =  intval($quantidade);
            //$botijaCarrinho->tem_tara =  false;
            $botijaCarrinho->save();
        }else {
            BotijaCarrinho::where($matchThese)
                ->update(['quantidade' => $botijaCarrinho->quantidade+$quantidade]);
        }

        return Response::json($this->response);  // <<<<<<<<< see this line

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function show(Carrinho $carrinho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrinho $carrinho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $productID = $request->input("productID");
        $quantidade = $request->input("quantidade");

        if ( !Auth::check() ){
            $carrinho = Session::get("carrinho");
            foreach ($carrinho as $key=>$atual){
                if($atual["botijasid"] == $productID) {
                    $carrinho[$key]["quantidade"]= $quantidade ;
                    break;
                }
            }
            Session::put("carrinho", $carrinho);
            $this->response["carrinho"]=$carrinho;

            return Response::json($this->response);
        }
        $user = Auth::user();
        $carrinho = Carrinho::all()->where("utilizador", $user->id )->first();

        $matchThese = ['botijasid' => intval($productID), 'carrinhosid' =>  $carrinho->id];
        BotijaCarrinho::where($matchThese)
            ->update(['quantidade' => $quantidade]);

        $this->response["message"] = "Produto atualizado.";
        return Response::json($this->response);
    }

    public function saveDetalhes (Request $request){
        $inputs = $request->all();

        $regras = [
            'metodoPagamento' => "required",
            'garrafa' => "required",
        ];
        $mensagens = [
            'required' => 'O Campo ":attribute" é de preenchimento obrigatório!',
        ];
        $request->validate($regras, $mensagens);

        if ( !Auth::check() ){
            return view("carrinho.detalhes")->with("page","detalhes")->withErrors(['notLogged'=> 'Porfavor faça login.']);
        }

        $user = Auth::user();
        $matchThese = ['utilizador' => $user->id];



        if ( $inputs["garrafa"] ){
            Carrinho::where($matchThese)
                ->update(['meio_pagamento' => $inputs["metodoPagamento"] , 'qtd_tara' => $inputs["tara"]]);
        }else {
            Carrinho::where($matchThese)
                ->update(['meio_pagamento' => $inputs["metodoPagamento"] , 'qtd_tara' => 0]);
        }

        $carrinho = Carrinho::all()->where("utilizador", $user->id )->first();
        $arrVars = ["carrinho" => $carrinho, "page" => "resumo"];
        return view("carrinho.resumo")->with($arrVars);
    }


    public function atualizaCarrinho () {
        return view("carrinho.carrinho-header");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */

    public function remove(Request $request)
    {
        $productID = $request->get("productID");
        if(!Auth::check()) {
            // Work with sessions
            $carrinho = Session::get("carrinho");
            foreach ($carrinho as $key => $atual){
                if($atual["botijasid"] == $productID) {
                    unset($carrinho[$key]);
                    break;
                }
            }

            Session::put("carrinho", $carrinho);
            $this->response["carrinho"]=$carrinho;

            return Response::json($this->response);
        }

        $user = Auth::user();
        $carrinho = Carrinho::where("utilizador", $user->id)->first();

        BotijaCarrinho::where("carrinhosid", $carrinho->id)
            ->where("botijasid", $productID)
            ->delete();
        $this->response["message"]="Produto removido";
        return Response::json($this->response);
    }

    public function destroy($carrinho)
    {
        if(!Auth::check()) {
            // Work with sessions
            $carrinho = [];
            if (Session::has("carrinho")) {
                Session::remove("carrinho");
            }
            $this->response["message"]="Carrinho foi limpo";
            return Response::json($this->response);
        }

        BotijaCarrinho::where("carrinhosid", $carrinho->id)->delete();
        Carrinho::where("id", $carrinho->id)->delete();
        $this->response["message"]="Carrinho foi limpo";
        return Response::json($this->response);
    }
}
