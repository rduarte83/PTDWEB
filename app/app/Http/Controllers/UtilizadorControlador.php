<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilizador;
use Illuminate\Support\Facades\Auth;

class UtilizadorControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct(){
        $this->middleware('auth');
    }*/
    public function index()
    {

        $utilizadores = Utilizador::all();
        //$users = Utilizador::all();
        $page = Utilizador::all();
        return view('profile.info', compact('utilizadores'), compact('page'));
        //return view('profile.info', array('utilizadores' => $utilizadores), array('page' => $page));
        //return view('profile.info', array('users' => $users), array('page' => $page));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UtilizadorControlador $model)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilizador = Utilizador::find($id);
        if(isset($utilizador)){
            return view('/info', compact('utilizador'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $utilizador = Utilizador::find($id);
        $page = Utilizador::all();
        if(isset($utilizador)){
            return view('/profile/edit', compact('utilizador'), compact('page'));
        }
        return redirect('/registar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //regras de validação formulári
        $regras = [
            'nome' => "min:3 | max:100",
            //'email' => "email | unique:utilizadores",
            //'password1' => "min:8 | max:20 | required_with:password2 | same:password2",
            //'password2'  => "min:8 | max:20 |",
        ];
        $mensagens = [
            'nome.min' => 'Mínimo 3 caracteres no nome!',
            'nome.max' => 'Máximo 100 caracteres no nome!',
            //'email.unique' => 'O email ' . $request->input('email') . ', já se encontra registado!',
            'email.email' => 'Insira um endereço de email válido!',
            //'password1.min' => 'Mínimo 8 caracteres na password!',
            //'password1.max' => 'Máximo 20 caracteres na password!',
            //'password1.same' => 'A ":attribute" e a "password2" devem corresponder',
            //'password2.min' => 'Mínimo 8 caracteres na password de confirmação!',
            //'password2.max' => 'Máximo 20 caracteres na password!'

        ];

        $utilizador = Utilizador::find($id);
        $page = Utilizador::all();
        if(isset($utilizador)){
            $request->validate($regras, $mensagens);

            $utilizador->nome = $request->input('nome');
            $utilizador->email = $request->input('email');
            //$utilizador->password = $request->input('password1');
            $utilizador->nif = $request->input('nif');
            $utilizador->morada = $request->input('morada');
            $utilizador->codigo_postal = $request->input('codigo_postal');
            $utilizador->localidade = $request->input('localidade');
            $utilizador->save();
            return redirect('/info');

        }
        return redirect('/registar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utilizador = Utilizador::find($id);
        if(isset($utilizador)){
            $utilizador->delete();
            //Session::flush(); // remove toda a session do utilizador
        }
        return redirect('/registar');
    }





}
