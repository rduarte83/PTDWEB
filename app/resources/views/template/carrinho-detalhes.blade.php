<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
   <!-- <div class="card-header">
        <div class="card title text-lg-center">
            <h2>Detalhes de compra</h2>
        </div>
    </div>-->
    <div class="card-body">


        <div class="card">
            <div class="card-header">
                <h5 class="font-weight-bold">Metodo de pagamento</h5>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="refmultibanco" id="refmultibanco" value="refenciaMultibanco">
                        <label class="form-check-label" style="font-size: medium; for="refmultibanco">Referência multibanco</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cartcredito" id="cartcredito" value="cartaoCredito">
                        <label class="form-check-label" style="font-size: medium; for="cartcredito">Cartão de crédito</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cartfisico" id="cartfisico" value="cartaofisico">
                        <label class="form-check-label" style="font-size: medium; for="cartfisico">Cartão fisico associado</label>
                    </div>
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="font-weight-bold">Compra com entrega de garrafa vazia</h5>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="simgarrafa" id="cartcredito" value="simGarrafa">
                        <label class="form-check-label" style="font-size: medium; for="simgarrafa">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="naogarrafa" id="cartfisico" value="naoGarrafa">
                        <label class="form-check-label" style="font-size: medium; for="naogarrafa">Não (+ 2€)</label>
                    </div>
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="font-weight-bold">Pretende escolher um ponto de recolha</h5>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="simrecolha" id="simrecolha" value="simRecolha">
                                <label class="form-check-label" style="font-size: medium;" for="simrecolha">Sim (Escolha na lista ao lado)</label>
                                </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="naorecolha" id="cartfisico" value="naoRecolha">
                                <label class="form-check-label" style="font-size: medium;" for="naorecolha">Não (Pode levantar em qualquer ponto de recolha)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
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
                </blockquote>
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