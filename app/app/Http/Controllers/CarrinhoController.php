<?php

namespace App\Http\Controllers;

use App\Carrinho;
use Illuminate\Http\Request;
use function Sodium\add;


class CarrinhoController extends Controller
{
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

        $user = 1;//ESTATICO REMOVER!!!!!!
        $data["carrinho"] = Carrinho::all()->where('utilizador', $user)->first();
        return view( "carrinho/carrinho")-> with($data);
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
        $regras = [
            'nome' => "required | min:3 | max:100",
            'email' => "required | email | unique:utilizadores",
            'password1' => "min:8 | max:20 | required_with:password2 | same:password2",
            'password2'  => "min:8 | max:20 |",
        ];
        $mensagens = [
            'required' => 'O Campo ":attribute" é de preenchimento obrigatório!',
            'nome.min' => 'Mínimo 3 caracteres no nome!',
            'nome.max' => 'Máximo 100 caracteres no nome!',
            'email.unique' => 'O email ' . $request->input('email') . ', já se encontra registado!',
            'email.email' => 'Insira um endereço de email válido!',
            'password1.min' => 'Mínimo 8 caracteres na password!',
            'password1.max' => 'Máximo 20 caracteres na password!',
            'password1.same' => 'A ":attribute" e a "password2" devem corresponder',
            'password2.min' => 'Mínimo 8 caracteres na password de confirmação!',
            'password2.max' => 'Máximo 20 caracteres na password!'

        ];

        $request->validate($regras, $mensagens);

        $reg = new Utilizador();
        $reg->nome = $request->input('nome');
        $reg->email = $request->input('email');
        $reg->password = $request->input('password1');
        $reg->save();


        if ($model->create($request->all())) {
            $request->session()->flash('success', 'Sucesso!');

            //return redirect()->route('route.infoTeste');
            //->route('profile.info');
            return redirect('/info');
        }

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
    public function update(Request $request, Carrinho $carrinho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrinho $carrinho)
    {
        //
    }
}
