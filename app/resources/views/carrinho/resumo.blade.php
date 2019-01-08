@extends("carrinho")
@section("title")
    Carrinho - Resumo
@endsection
@section("content-carrinho")


    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <!--<div class="card-header">
            <div class="card title text-lg-center">
                <h2>Resumo</h2>
            </div>
        </div>-->
        <div class="card-body">

            <div class="row m-b-10">
                <div class="col-lg-9">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Qtd. Vasilhame</th>
                            <th scope="col">Preço s/IVA</th>
                            <th scope="col">Preço c/IVA</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php $botijasCarrinhos = \App\BotijaCarrinho::all()->where('carrinhosid',$carrinho->id);?>
                        @foreach ($botijasCarrinhos as $botijasCarrinho)
                            <?php $botijas = \App\Product::all()->where('id',$botijasCarrinho->botijasid);?>
                            @foreach ($botijas as $botija)
                                <tr>
                                    <th scope="row">{{$botijasCarrinho->quantidade}}</th>
                                    <td>{{$botija->marca}}</td>
                                    <td>{{$botija->tipo}}</td>
                                    <td>{{$botijasCarrinho->qtd_tara}}</td>
                                    <td>{{number_format($botija->preco/1.23, 2)}} €</td>
                                    <td>{{number_format($botija->preco, 2)}} €</td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header font-weight-bold text-center">Totais</div>
                        <div class="row">
                            <div class="col-lg-6">
                                @foreach ($botijasCarrinhos as $botijasCarrinho)
                                    <?php $botijas = \App\Product::all()->where('id',$botijasCarrinho->botijasid);?>
                                    @foreach ($botijas as $botija)
                                        <p class="text-left m-l-10">+</p>
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="col-lg-6">
                                <?php $total = 0; ?>
                                @foreach ($botijasCarrinhos as $botijasCarrinho)
                                    <?php $botijas = \App\Product::all()->where('id',$botijasCarrinho->botijasid);?>
                                    @foreach ($botijas as $botija)
                                            <?php $total += $botijasCarrinho->quantidade * $botija->preco;?>
                                        <p class="text-right m-r-10">{{$botijasCarrinho->quantidade * $botija->preco}} €</p>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="text-right">Total s/IVA:</p>
                                <p class="text-right">IVA:</p>
                                <p class="text-right font-weight-bold">Total c/IVA:</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-right m-r-10">{{number_format($total/1.23, 2)}} €</p>
                                <p class="text-right m-r-10">{{number_format($total-$total/1.23, 2)}} €</p>
                                <p class="text-right font-weight-bold m-r-10">{{number_format($total, 2)}} €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center  flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="w-size25">
                    <!-- Button -->
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("carrinho/detalhes")}}">
                        Retroceder
                    </a>
                </div>
                <div class="w-size25">
                    <form method="post" action="{{URL("carrinho/compra")}}" >
                        @csrf
                        <!-- Button -->
                        <button type="submit" class="flex-c-m size2 bg-sucess bo-rad-23 hov3 s-text3 trans-0-4 p-2 text-white" >
                           Finalizar compra
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
