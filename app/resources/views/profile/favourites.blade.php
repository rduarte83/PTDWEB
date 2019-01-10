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
                        <?php $botija = \App\Product::all()->where('id',$fav->botijasid)->first();?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" alt="Thumbnail" style="max-width: 100%; height: auto" src="{{URL::asset($botija->imagem)}}">
                                <div class="d-flex justify-content-between align-items-center">
                                    <table class="table table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Peso</th>
                                            <th scope="col">Preço</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">{{$botija->marca}}</th>
                                            <td>{{$botija->tipo}}</td>
                                            <td>{{$botija->peso}}  Kg</td>
                                            <td>{{$botija->preco}} €</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
