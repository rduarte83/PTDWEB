<?php

namespace App\Http\Controllers;

use App\Botija;
use App\BotijaCarrinho;
use App\BotijaCompra;
use App\Carrinho;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use LaravelQRCode\Facades\QRCode;

class CompraController extends Controller
{

    public function store(Request $request) {
        $user = $request->user();

        $carrinho = Carrinho::all()->where("utilizador", $user->id )->first();

        if($carrinho == null)
        {
            $carrinho = new Carrinho();
            $carrinho->utilizador = $user->id;
            $carrinho->save();
        }

        $total = 0;
        $numBotijas = 0;

        $botijasCarrinho = BotijaCarrinho::all()->where("carrinhosid", $carrinho->id);

        foreach ( $botijasCarrinho as $botijaCarrinho ) {
            $botija = Botija::all()->where("id", $botijaCarrinho->botijasid )->first();
            $total += $botijaCarrinho->quantidade * intval($botija->preco);
            $numBotijas+=$botijaCarrinho->quantidade;
        }

        $total =  $total + 5 * ($numBotijas - $carrinho->qtd_tara);

        $pin =  rand(0, 9999999999);

        $compra = new Compra();
        $compra->utilizador = $user->id;
        $compra->data = now();
        $compra->valor = $total;
        $compra->meio_pagamento = $carrinho->meio_pagamento;
        $compra->qtd_tara = $carrinho->qtd_tara;
        $compra->pin = $pin;
        $compra->save();

        foreach ( $botijasCarrinho as $botijaCarrinho ) {
            $botija = Botija::all()->where("id", $botijaCarrinho->botijasid )->first();

            // Guardar Nova botija
            $novaBotija = new BotijaCompra();
            $novaBotija->botijasid = $botija->id;
            $novaBotija->comprasid = $compra->id;
            $novaBotija->preco_compra = $botija->preco;
            $novaBotija->quantidade = $botijaCarrinho->quantidade;
            $novaBotija->save();
        }

        $qr = QRCode::text($compra->id)->setOutfile(storage_path()."/app/public/".$compra->id.'.png')->png();

        $matchThese = ["id" => $compra->id];

        Compra::where($matchThese)->update( ['qr' => URL::asset("storage/".$compra->id.'.png') ] );

        $comprinha = Compra::where($matchThese)->get()->last();

        $arrSend = ["page" => "final", "compra" => $comprinha];
        return view("carrinho.final")->with($arrSend );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function final(Request $request)
    {
        $user = $request->user();

        $regras = [
            'recolha' => "required"
        ];
        $mensagens = [
            'required' => 'O Campo ":attribute" é de preenchimento obrigatório!',
        ];

        $request->validate($regras, $mensagens);

        $recolha = Compra::all()->where('utilizador' , $user->id)->last();

        if ($request->input('recolha') == 1)
            Compra::where('id', $recolha->id)->update(['local_recolha' => $request->input('local')]);


        // TODO : APAGAR DO CARRO
        $carrinho = Carrinho::where("utilizador", $user->id)->first();
        if ( $carrinho != null ) {
            $carrinhoController = new CarrinhoController();
            $result = $carrinhoController->destroy($carrinho);
        }


        return redirect('/perfil/historico');
    }
}
