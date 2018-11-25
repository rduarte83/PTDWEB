@extends("carrinho")
@section("title")
    Carrinho
@endsection
@section("content-carrinho")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <!--<div class="card-header">
        <div class="card title text-lg-center">
            <h2>Lista Carrinho</h2>
        </div>
        </div>-->
        <div class="card-body">
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tbody>
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">produtos</font></font></th>
                            <th class="column-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preço</font></font></th>
                            <th class="column-4 p-l-70"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quantidade</font></font></th>
                            <th class="column-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total</font></font></th>
                        </tr>

                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                    <img src="{{URL::asset("images/garrafas/butano-13kg.png")}}" alt="IMG-PRODUCT">
                                </div>
                            </td>
                            <td class="column-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Botija de gás Propano - GALP</font></font></td>
                            <td class="column-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19,00€</font></font></td>
                            <td class="column-4">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="column-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36,00€</font></font></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-2">
                        Atualizar carrinho
                    </button>
                </div>
                <div class="trans-0-4">
                    <!-- Button -->
                    <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-2 text-white" href="/carrinho/detalhes">
                        Continuar
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
