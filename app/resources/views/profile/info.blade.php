@extends("profile", ["current" => "info"])
@section("content-profile")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="modal-body row">
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                <h2 class="p-b-20">Perfil do utilizador</h2>
                @auth
                    <strong>Nome</strong><div class="p-b-20"><span>{{$user->nome}}</span></div>
                    <strong>Email</strong><div class="p-b-20"><span>{{$user->email}}</span></div>
                    <strong>Número de Contribuinte</strong><div class="p-b-20"><span>{{$user->nif}}</span></div>
                    <strong>Morada</strong><div class="p-b-20"><span>{{$user->morada}}</span></div>
                    <strong>Código Postal</strong><div class="p-b-20"><span>{{$user->codigo_postal}}</span></div>
                    <strong>Localidade</strong><div class="p-b-20"><span>{{$user->localidade}}</span></div>
                @endauth
                <div class="w-size25 p-t-20">
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("perfil/editar")}}">Editar perfil</a>
                    <!--<a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("/register/editarUtilzador/{_utilizador->id}")}}">Editar perfil</a> -->
                </div>
            </div>
        </div>
    </div>
@endsection


