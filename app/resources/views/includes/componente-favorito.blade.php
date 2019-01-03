<!-- Componente que vai conter a descrição do item, referente ao favorito/user -->
<?php
$botija = \App\Product::all()->where('id',$fav->botijasid)->first();?>

<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{URL::asset($botija->imagem)}}" data-holder-rendered="true">
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


