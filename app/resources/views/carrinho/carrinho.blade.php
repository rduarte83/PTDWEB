@extends("carrinho")
@section("title")
    Carrinho
@endsection
@section("content-carrinho")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tbody>
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2"><span style="vertical-align: inherit;">Produtos</span></th>
                            <th class="column-3"><span style="vertical-align: inherit;">Preço</span></th>
                            <th class="column-3"><span style="vertical-align: inherit;">Quantidade</span></th>
                            <th class="column-5"><span style="vertical-align: inherit;">Total</span></th>
                        </tr>
                        <?php
                        use Illuminate\Support\Facades\Auth;
                            if(Auth::check()){
                                 $botijasCarrinhos = \App\BotijaCarrinho::all()->where('carrinhosid',$carrinho->id);
                            }else{
                                $botijasCarrinhos = $carrinho;
                            }
                        ?>
                        @if ( $botijasCarrinhos != null)
                        @foreach ($botijasCarrinhos as $botijasCarrinho)
                            <?php
                            if(Auth::check())
                                $botijas = \App\Product::all()->where('id',$botijasCarrinho->botijasid);
                            else
                                $botijas = \App\Product::all()->where('id',$botijasCarrinho["botijasid"]);
                            ?>
                            @foreach ($botijas as $botija)
                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img src="{{URL::asset($botija->imagem)}}" alt="IMG-PRODUCT">
                                        </div>
                                    </td>
                                    <td class="column-2"><span style="vertical-align: inherit;">{{$botija->marca}} - {{$botija->nome}}</span></td>
                                    <td class="column-3"><span style="vertical-align: inherit;">{{$botija->preco}} €</span></td>
                                    <td class="column-3"><span style="vertical-align: inherit;"></span></th>
                                        <div class="flex-w bo5 of-hidden w-size17">
                                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                            </button>

                                            <?php if(Auth::check()): ?>
                                                <input data-product-id="{{$botija->id}}" class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{ $botijasCarrinho->quantidade }}" />
                                            <?php else: ?>
                                                <input data-product-id="{{$botija->id}}" class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{ $botijasCarrinho["quantidade"] }}" />
                                            <?php endif; ?>

                                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>

                                    <?php if(Auth::check()): ?>
                                        <td class="column-5"><span style="vertical-align: inherit;" data-product-id-total="{{$botija->id}}" data-preco="{{$botija->preco}}">{{ number_format($botija->preco * $botijasCarrinho->quantidade, 2)}} €</span></td>
                                    <?php else: ?>
                                        <td class="column-5"><span style="vertical-align: inherit;" data-product-id-total="{{$botija->id}}" data-preco="{{$botija->preco}}">{{ number_format($botija->preco * $botijasCarrinho["quantidade"], 2)}} €</span></td>
                                    <?php endif; ?>

                                </tr>
                            @endforeach
                        @endforeach
                        @else
                            <tr class="table-row">
                                <td colspan="5" class="column-1 text-center">Não tem items no carrinho.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="w-size25 float-right">
                    <!-- Button -->
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("loja")}}">
                        Continuar a comprar
                    </a>
                </div>
                <div class="w-size25">
                    <!-- Button -->
                    <a class="flex-c-m p-btn-cart size2 bg-sucess bo-rad-23 hov3 s-text3 trans-0-4 p-2 text-white " href="{{URL("carrinho/detalhes")}}">
                        Prosseguir com a compra
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
