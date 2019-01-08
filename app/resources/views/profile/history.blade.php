
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@extends("profile")
@section("content-profile")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-header bg-transparent">
            <div class="card-title text-lg-left">
                <h2 class="m-text26">Histórico de Compras</h2>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover stripe" id="tabela">
                <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Qtd</th>
                    <th scope="col">Preço Unitário</th>
                    <th scope="col">Data e Hora</th>
                    <th scope="col">Local de Recolha</th>
                    <th scope="col">Código QR</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($compras as $compra)
                        <?php $botijasCompras = \App\BotijaCompra::all()->where('comprasid',$compra->id);?>
                        @foreach ($botijasCompras as $botijacompra)
                            <?php $botijas = \App\Product::all()->where('id',$botijacompra->botijasid);?>
                            @foreach ($botijas as $botija)
                                <tr>
                                    <td>{{$botija->nome}}
                                        <span class="float-lg-left img-small">
                                            <img class="img-small" alt="ICON" src="{{URL::asset($botija->imagem)}}">
                                        </span>
                                    </td>
                                    <td>{{$botijacompra->quantidade}}</td>
                                    <td>{{$botijacompra->preco_compra}} €</td>
                                    <td>{{$compra->data}}</td>
                                    <td>{{$compra->local_recolha}}</td>
                                    <td><img class="img-small" alt="ICON" src="{{URL::asset($compra->qr)}}"></td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
    $(document).ready( function () {
        $('#tabela').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
            }
        });
    });
    </script>
@endsection