<?php

namespace App\Http\Controllers\Auth;

use App\BotijaCarrinho;
use App\Carrinho;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers{
        loggedOut as loggedOut2;
        authenticated as authenticated2;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $loginPath = '/';

    protected $redirectTo = '/';

    public function loggedOut(Request $request)
    {
        $request->session()->setExists(false);
        $request->session()->put("isLogged",false);
    }

    public function authenticated(Request $request, $user)
    {
        $request->session()->setExists(true);
        $request->session()->put("isLogged",true);
        Auth::setUser($user);

        if ( Session::has("carrinho") ){
            $user = Auth::user();
            $carrinho = Carrinho::all()->where("utilizador", $user->id )->first();
            if($carrinho == null)
            {
                $carrinho = new Carrinho();
                $carrinho->utilizador = $user->id;
                $carrinho->save();
            }

            $this->loadCarrinhoToBD($carrinho, Session::get("carrinho"));
        }

    }

    private function loadCarrinhoToBD ($carrinho, $carrinhoSessao) {
        foreach( $carrinhoSessao as $item){
            $matchThese = ['botijasid' => intval($item["botijasid"]), 'carrinhosid' =>  $carrinho->id];
            $botijaCarrinho = BotijaCarrinho::where($matchThese)->first();

            if ( $botijaCarrinho == null  ){
                $botijaCarrinho = new BotijaCarrinho();
                $botijaCarrinho->botijasid = intval($item["botijasid"]);
                $botijaCarrinho->carrinhosid = $carrinho->id;
                $botijaCarrinho->quantidade =  intval($item["quantidade"]);
                //$botijaCarrinho->tem_tara =  false;
                $botijaCarrinho->save();
            }else {
                BotijaCarrinho::where($matchThese)
                    ->update(['quantidade' => $botijaCarrinho->quantidade+$item["quantidade"]]);
            }
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
