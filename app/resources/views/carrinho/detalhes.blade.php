@extends("carrinho")
@section("title")
    Carrinho - Detalhes
@endsection
@section("content-carrinho")


<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <form>
        <div class="card-body">
            <div class="card  bo-rad-0-bottom">
                <div class="card-header">
                    <h5 class="font-weight-bold">Metodo de pagamento</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="metodoPagaemento" id="refmultibanco" value="refenciaMultibanco">
                            <label class="form-check-label" style="font-size: medium;" for="refmultibanco">Paypal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="metodoPagaemento" id="cartcredito" value="cartaoCredito">
                            <label class="form-check-label" style="font-size: medium;" for="cartcredito">MBWay</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="metodoPagaemento" id="cartfisico" value="cartaofisico">
                            <label class="form-check-label" style="font-size: medium;" for="cartfisico">Cartão Pré-pago</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bo-rad-0-top bo-rad-0-bottom">
                <div class="card-header">
                    <h5 class="font-weight-bold">Compra com entrega de garrafa vazia</h5>
                </div>
                <div class="card-body ">
                    <div class="container">
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="garrafa" id="simgarrafa" value="simGarrafa">
                            <label class="form-check-label" style="font-size: medium;" for="simgarrafa">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="" type="radio" name="garrafa" id="naogarrafa" value="naoGarrafa">
                            <label class="form-check-label" style="font-size: medium;" for="naogarrafa">Não (+ 2€)</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bo-rad-0-top">
                <div class="card-header">
                    <h5 class="font-weight-bold">Pretende escolher um ponto de recolha</h5>
                </div>
                <div class="card-body">
                    <div class="container row">
                        <div class="col-lg-6  col-md-6">
                            <div class="form-check">
                                <input class="" type="radio" name="recolha" id="simrecolha" value="simRecolha">
                                <label class="form-check-label" style="font-size: medium;" for="simrecolha">Sim (Escolha na lista ao lado)</label>
                            </div>
                            <div class="form-check">
                                <input class="" type="radio" name="recolha" id="naorecolha" value="naoRecolha">
                                <label class="form-check-label" style="font-size: medium;" for="naorecolha">Não (Pode levantar em qualquer ponto de recolha)</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group" style="margin-top: -2px">
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
            <div class="card-footer text-right  flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="trans-0-4">
                    <!-- Button -->
                    <a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-2 text-white" href="/carrinho/resumo">
                        Continuar
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
