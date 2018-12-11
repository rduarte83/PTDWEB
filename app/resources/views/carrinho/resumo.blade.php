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
                            <th scope="col">Qt. vasilhame</th>
                            <th scope="col">Preço s/IVA</th>
                            <th scope="col">Preço c/IVA</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <th scope="row">1</th>
                            <td>Galp</td>
                            <td>Botija 10Kg</td>
                            <td>1</td>
                            <td>20 €</td>
                            <td>24,60 €</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>BP</td>
                            <td>Botija 10Kg</td>
                            <td>1</td>
                            <td>20 €</td>
                            <td>24,60 €</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header font-weight-bold text-center">Totais</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="text-left m-l-10">+</p>
                                <p class="text-left m-l-10">+</p>
                                <p class="text-left m-l-10">+</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-right m-r-10">2,00 €</p>
                                <p class="text-right m-r-10">2,00 €</p>
                                <p class="text-right  m-r-10">24,60 €</p>
                                <p class="text-right  m-r-10">24,60 €</p>
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
                                <p class="text-right m-r-10">44,00 €</p>
                                <p class="text-right m-r-10">9,20 €</p>
                                <p class="text-right font-weight-bold m-r-10">53,20 €</p>
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
                    <!-- Button -->
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("carrinho/final")}}">
                       Finalizar compra
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
