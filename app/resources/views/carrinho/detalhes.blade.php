@extends("carrinho")
@section("title")
    Carrinho - Detalhes
@endsection
@section("content-carrinho")

<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <form method="post" action="{{URL("carrinho/detalhes")}}">
        @csrf
        <div class="card-body">
            <div class="card bo-rad-0-bottom">
                @if($errors->has('notLogged'))
                    <div class="alart alert-danger error-message" >
                        {{$errors->first('notLogged')}}
                    </div>
                @endif
                <div class="card-header">
                    <h5 class="font-weight-bold">Método de pagamento</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @foreach(App\Pagamento::all() as $metodo)
                                <div class="form-check form-check-inline">
                                    <input class="" type="radio" name="metodoPagamento" id="{{$metodo->meio}}" value="{{$metodo->id}}">
                                    <label class="form-check-label" style="font-size: medium;" for="{{$metodo->meio}}">{{$metodo->meio}}</label>
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
                @if($errors->has('metodoPagamento'))
                    <div class="alart alert-danger error-message" >
                        {{$errors->first('metodoPagamento')}}
                    </div>
                @endif
            </div>
            <div class="card bo-rad-0-top">
                <div class="card-header">
                    <h5 class="font-weight-bold">Compra com entrega de garrafa vazia</h5>
                </div>
                <div class="card-body p-t-30">
                    <div class="container">
                        <div class="row">
                            <div class="form-check form-check-inline">
                                <input class="" type="radio" name="garrafa" id="simgarrafa" value="1">
                                <label class="form-check-label" style="font-size: medium;" for="simgarrafa">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="" type="radio" name="garrafa" id="naogarrafa" value="0">
                                <label class="form-check-label" style="font-size: medium;" for="naogarrafa">Não (+5€)</label>
                            </div>

                            <span class="m-l-20">Quantidade a entregar</span>
                            <div class="form-group flex-w bo5 of-hidden w-size17 m-l-20 m-b--8">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>
                                <input class="size8 m-text18 t-center num-product" type="number" name="tara" value="1">
                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @if($errors->has('garrafa'))
                    <div class="alart alert-danger error-message" >
                        {{$errors->first('garrafa')}}
                    </div>
                @endif
            </div>
            <div class="card bo-rad-0-top">
            </div>
            <div class="card-footer text-center  flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="w-size25">
                    <!-- Button -->
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("carrinho")}}">
                        Retroceder
                    </a>
                </div>
                <div class="w-size25">
                    <!-- Button -->
                    <button type="submit" style="padding-top: 2px !important;" class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 bg-sucess text-white">Prosseguir com a compra</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
