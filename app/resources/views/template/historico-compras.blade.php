@include('ui.header')


    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <div class="card title text-lg-left">
                <h2>Histórico de Compras</h2>
            </div>
        </div>
        <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Data e hora</th>
                                <th scope="col">Local de Levantamento</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Botija de Gas Galp <span class="float-lg-right"><img class="" alt="ICON" src="images/icons/icon-header-02.png"></span></td>
                                <td>1</td>
                                <td>5.40€</td>
                                <td>14/11/2018 10h13</td>
                                <td>Rua da Travessa, 431 - Santa Maria da Feira</td>
                            </tr>
                            <tr>
                                <td>Botija de Gas PR10 <span class="float-lg-right"><img class="" alt="ICON" src="images/icons/icon-header-02.png"></span></td>
                                <td>1</td>
                                <td>5.40€</td>
                                <td>14/11/2018 10h13</td>
                                <td>Rua da Travessa, 431 - Santa Maria da Feira</td>
                            </tr>
                            </tbody>
                        </table>
            </div>
    </div>

@include('ui.footer')