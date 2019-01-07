@extends("layouts.default")
@section("title")
    {{$title}}
@endsection
@section("content")

    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(/images/home-bg-sml-dark.jpg);">
        <h2 class="l-text2 t-center">
            {{$title}}
        </h2>
    </section>

    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <form action="{{URL::current()}}" method="GET" id="search"></form>
                            <label for="categoria" class="m-text14 p-b-7">
                                Categoria
                            </label>

                            <ul class="p-b-54">
                                <li class="p-t-4">
                                    <input class="s-text13" type="radio" name="categoria" value="todas"> Todas
                                </li>

                                @foreach($categorias as $c)
                                <li class="p-t-4">
                                    <input class="s-text13" type="radio" name="categoria" value="{{$c->tipo}}"> {{$c->tipo}}
                                </li>
                                @endforeach
                            </ul>

                            <label for="marca" class="m-text14 p-b-7">
                                Marca
                            </label>

                            <ul class="p-b-54">
                                <li class="p-t-4">
                                    <input class="s-text13" type="radio" name="marca" value="todas"> Todas
                                </li>

                                @foreach($marcas as $m)
                                <li class="p-t-4">
                                    <input class="s-text13" type="radio" name="marca" value="{{$m->marca}}"> {{$m->marca}}
                                </li>
                                @endforeach
                            </ul>

                            <input type="submit" form="search" value="Procurar" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                        </form>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                <select class="selection-1" name="sorting">
                                    <option>Ordenar por</option>
                                    <option>Preço: mais baixo primeiro</option>
                                    <option>Price: mais alto primeiro</option>
                                </select>
                            </div>
                        </div>

                        <span class="s-text8 p-t-5 p-b-5">
							A mostrar {{$n_res}} resultados
						</span>
                    </div>

                    <!-- Products -->
                    @if($n_res > 0)
                    <div class="row">
                    @foreach($botijas as $botija)
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w img-product of-hidden pos-relative">
                                    <img class="img-fit" src="{{URL::asset($botija->imagem)}}" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="{{URL('product')}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div data-product-id="{{$botija->id}}" class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Adicionar ao Carrinho
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="{{URL('produto/' . $botija->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$botija->nome}}
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
										{{$botija->preco}}€
									</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m">
                        <h3 class="t-center">
                            Nenhum produto encontrado.
                        </h3>
                    </section>
                    @endif

                    <!-- Pagination
                    <div class="pagination flex-m flex-w p-t-26">
                        <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                        <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                    </div>
                    -->
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
