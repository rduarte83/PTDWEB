@section('carrinho-resumo')
<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <!--<div class="card-header">
        <div class="card title text-lg-center">
            <h2>Resumo</h2>
        </div>
    </div>-->
    <div class="card-body">

        <div class="row">
            <div class="col-lg-6">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Preço</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Galpe</td>
                            <td>Botija 10Kg</td>
                            <td>20 €</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>BP</td>
                            <td>Botija 10Kg</td>
                            <td>20 €</td>
                        </tr>
                        </tbody>
                    </table>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Totais
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <p class="text-left m-l-10">+</p>
                            <p class="text-left m-l-10">+</p>
                            <p class="text-left m-l-10">+</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-right m-r-10">2,00 €</p>
                            <p class="text-right  m-r-10">20,00 €</p>
                            <p class="text-right  m-r-10">20,00€</p>
                        </div>
                </div>
                    <hr>
                    <div>
                        <p class="text-right  m-r-10">Total: 42.00€</p>
                    </div>
            </div>
        </div>
        </div>
        <div class="card-footer text-right  flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="trans-0-4">
                <!-- Button -->
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-2">
                    Continuar
                </button>
            </div>
        </div>
    </div>
</div>

@endsection