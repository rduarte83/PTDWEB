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
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="fm-text26">Compra efetuada com sucesso <span
                                                class="glyphicon glyphicon-thumbs-up"></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Use os códigos nesta página para levantar a sua botija em quarquer ponto de
                                            recolha.</p>
                                    </div>
                                </div>
                                <div class="card bo-rad-0-top">
                                    <div class="card-header">
                                        <h5 class="fm-text26">Pretende escolher um ponto de recolha</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="container row">
                                            <div class="col-lg-8 col-md-8">
                                                <div class=form-check">
                                                    <input class="form-check-input" type="radio" name="recolha" id="simrecolha" value="simRecolha">
                                                    <label class="form-check-label" style="font-size: medium;" for="simrecolha">Sim (Escolha na lista ao lado)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="recolha" id="naorecolha" value="naoRecolha">
                                                    <label class="form-check-label" style="font-size: medium;" for="naorecolha">Não (Pode levantar em qualquer ponto de recolha)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 form-group" style="margin-top: -2px">
                                                <label for="sel1" style="font-size: medium;">Lista de pontos de recolha:</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Aveiro</option>
                                                    <option>Guarda</option>
                                                    <option>Vila Nova de Gaia</option>
                                                    <option>Santa Maria da Feira</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">QR code</h5>
                                        <img src="{{URL::asset("images/qrcodes/qrcode.png")}}" alt="Código de barras">
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="card-link">Imprimir</a>  |<a href="#" class="card-link">Guardar</a>
                                    </div>
                                </div>
                                <div class="card m-t-10">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Código Numérico</h5>
                                        <p class="card-text">1234567890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </blockquote>
            </div>
            <div class="card-footer text-center  flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="w-size25">
                    <!-- Button -->
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="/index">
                        Regressar à homepage
                    </a>
                </div>
                <div class="w-size25">
                    <!-- Button -->
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="#">
                        Submeter
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection
