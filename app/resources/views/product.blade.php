@extends("layouts.default")
@section("title")
    {{$title}}
@endsection
@section("content")
    <!-- breadcrumb-->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="/index" class="s-text16">
            Home
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="/loja" class="s-text16">
            Loja
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="/product/{{$botija->id}}" class="s-text16">
            {{$botija->nome}}
        </a>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        <div class="item-slick3" data-thumb="{{URL::asset($botija->imagem)}}">
                            <div class="wrap-pic-w">
                                <img src="{{URL::asset($botija->imagem)}}" alt="IMG-PRODUCT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    {{$botija->nome}}
                </h4>

                <span class="m-text17">
					{{$botija->preco}}€
				</span>

                <br><br>

                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Descrição
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            {{$botija->descricao}}
                        </p>
                    </div>
                </div>

                <!--  -->
                <div class="p-t-33 p-b-60">
                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10" style="margin-top: auto;">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input id="num-product" class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <button id="btn-add-cart" data-id="{{$botija->id}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Adicionar ao carrinho
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-b-45">
                    <!--<span class="s-text8 m-r-35">SKU: GALP-01</span>-->
                    <span class="s-text8">Categoria: {{$botija->marca}}, {{$botija->tipo}}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Produtos Relacionados
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

                    @include("ui.product")
                    @for($i = 0; $i < 5; $i++)
                        @yield("product")
                    @endfor

                </div>
            </div>
        </div>
    </section>

@endsection
