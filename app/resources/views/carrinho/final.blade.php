@extends("carrinho")
@section("title")
    Carrinho - Final
@endsection
@section("content-carrinho")

    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <!-- <div class="card-header">
             <div class="card title text-lg-center">
                 <h2>Detalhes de compra</h2>
             </div>
         </div>-->
        <div class="card-body">
            <div class="card">
                <blockquote class="blockquote mb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="font-weight-bold">Compra efetuada com sucesso <span
                                                class="glyphicon glyphicon-thumbs-up"></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Use o código nesta página para levantar a sua botija em quarquer ponto de
                                            recolha.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body">
                                <div class="card">

                                    <img class="class= img-thumbnail text-center" style="width:150px; height:100px;"
                                         src="{{URL::asset("images/codigobarras.png")}}" alt="Código de barras">


                                </div>
                                <div class="card-footer text-center">
                                    <a href="#" class="card-link">Imprimir</a> |
                                    <a href="#" class="card-link">Guardar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </blockquote>

            </div>
        </div>
        <div class="card-footer text-right  flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="trans-0-4">
                <!-- Button -->
                <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-2 text-white">
                    Voltar à homepage
                </a>
            </div>
        </div>
    </div>

@endsection
