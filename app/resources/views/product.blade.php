@extends("layouts.default")
@section("title")
    Produto - @php($produto) Botija de gás Butano - Galp
@endsection
@section("content")
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="/index" class="s-text16">
            Home
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="/product" class="s-text16">
            Butano
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="/#" class="s-text16">
            Galp
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
			Botija de gás Butano - Galp
		</span>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        <div class="item-slick3" data-thumb="{{URL::asset("images/garrafas/butano-13kg.png")}}">
                            <div class="wrap-pic-w">
                                <img src="{{URL::asset("images/garrafas/butano-13kg.png")}}" alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="{{URL::asset("images/garrafas/butano_13kg.png")}}">
                            <div class="wrap-pic-w">
                                <img src="{{URL::asset("images/garrafas/butano_13kg.png")}}" alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="{{URL::asset("images/garrafas/butano_125.png")}}">
                            <div class="wrap-pic-w">
                                <img src="{{URL::asset("images/garrafas/butano_125.png")}}" alt="IMG-PRODUCT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    Botija de gás Butano - Galp
                </h4>

                <span class="m-text17">
					10€
				</span>

                <p class="s-text8 p-t-10">
                    Botija de gás Butano da galp, com capacidade para 15 dias de uso corrente.
                </p>

                <!--  -->
                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">
                        <div class="s-text15 w-size15 t-center m-l-4-">
                            Tamanho da botija
                        </div>

                        <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                            <select class="selection-1" name="size">
                                <option>Escolha a opção</option>
                                <option>Pequena</option>
                                <option>Média</option>
                                <option>Grande</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Adicionar ao carrinho
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-b-45">
                    <span class="s-text8 m-r-35">SKU: GALP-01</span>
                    <span class="s-text8">Categoria: GALP, Butano</span>
                </div>

                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Descrição
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                        </p>
                    </div>
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
