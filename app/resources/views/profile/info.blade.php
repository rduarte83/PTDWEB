@extends("profile")
@section("content-profile")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="modal-body row">
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                <h2 class="p-b-20">Perfil do utilizador</h2>
                <strong>Nome</strong><div class="p-b-20"><span>Zé Utilizador</span></div>
                <strong>Email</strong><div class="p-b-20"><span>utilizador@mail.com</span></div>
                <strong>Número de Contribuinte</strong><div class="p-b-20"><span>1234567890</span></div>
                <strong>Morada</strong><div class="p-b-20"><span>Avenida de algures, nº82 1º Dir</span></div>
                <strong>Código Postal</strong><div class="p-b-20"><span>3800-000</span></div>
                <strong>Localidade</strong><div class="p-b-20"><span>Aveiro</span></div>

                <div class="w-size25 p-t-20">
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("perfil/editar")}}">Editar perfil</a>
                </div>

            </div>
        </div>
    </div>
@endsection
