@extends("profile")
@section("content-profile")

        <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header bg-transparent">
                <div class="card-title text-lg-left">
                    <h2 class="m-text26">Lista de Favoritos de {{$user->nome}}</h2>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    @foreach ($favs as $fav)
                        @include('includes.componente-favorito')
                    @endforeach
                </div>
            </div>
        </div>
@endsection
