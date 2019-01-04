<?php

namespace App\Http\Controllers;

use App\Carrinho;
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if(!Auth::check()) {
            // Work with sessions
            $carrinho = [];
            if (Session::has("carrinho")){
                $carrinho = Session::get("carrinho");
            }
            $productID = $request->input("productID");
            $quantidade = $request->input("quantidade");
            $alterado = false;
            foreach ($carrinho as $key=>$atual){
                if($atual["productID"] == $productID) {
                    $carrinho[$key]["quantidade"]+=1;
                    $alterado = true;
                    break;
                }
            }

            if(!$alterado) array_push($carrinho, array('productID' => $productID, "quantidade" =>$quantidade) );


            Session::put("carrinho", $carrinho);
            $this->response["carrinho"]=$carrinho;
            return Response::json($this->response);
        }

        $user = Auth::user();



       /* $regras = [
            'productID' => "required",
        ];
        $mensagens = [
            'required' => 'O Campo ":attribute" é de preenchimento obrigatório!',
        ];*/

        /*$request->validate($regras, $mensagens);

        $reg = new Carrinho();
        $reg->nome = $request->input('nome');
        $reg->email = $request->input('email');
        $reg->password = $request->input('password1');
        $reg->save();


        if ($model->create($request->all())) {
            $request->session()->flash('success', 'Sucesso!');

            //return redirect()->route('route.infoTeste');
            //->route('profile.info');
            return redirect('/info');
        }*/
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
    public function update(Request $request, Carrinho $carrinho)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrinho $carrinho)
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

    }
}
