@extends("layouts.default")
@section("title")
Homepage
@endsection
@section("content")
<div>
    <!-- Some info -->
    <section class="bg-title-page bg5 p-t-45 p-b-55" style="background-image: url(images/home-bg-sml-dark.jpg);">
        <div class="container">
            <div class="sec-title p-b-60">
                <h1 class="s-text-big t-center text-white">
                    OnGás
                </h1>
            </div>

            <div class="row">


                <div class="m-text-7 t-center">
                    <h5 class="s-text-medium t-center">
                        Sobre nós
                    </h5>
                    <br>
                    <p class="s-text-small">Somos uma aplicação de venda de gás online. O nosso foco é permitir que o utilizador
                        possa comprar a sua botija de gás favorita em qualquer altura e em qualquer lugar.
                    </p>

                </div>
            </div>

        </div>
    </section>

    <!-- New Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            @if ( $botijas != null )
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Mais vendidos
                </h3>
            </div>

            <!-- Slide2 -->

            <div class="wrap-slick2">
                <div class="slick2">
                    <?php $numItems = 0; ?>
                    @foreach( $botijas as $botija)
                        <?php $numItems++; ?>
                            <?php
                            if ( $numItems > 5) break;
                            $botijaInfo = \App\Product::where("id", $botija["id"])->first();

                            if ( Auth::check() ){
                                $user = Auth::user();
                                $isInFavourite = \App\Favorito::where("botijasid", $botijaInfo->id)
                                    ->where("utilizadoresid", $user->id)
                                    ->first();
                            }
                            ?>
                            <div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w img-product of-hidden pos-relative">
                                        <img class="img-fluid mx-auto d-block" style="width:auto; max-height:100%" src="{{URL::asset($botijaInfo->imagem)}}" alt="{{$botijaInfo->nome}}">

                                        <div data-product-id="{{$botijaInfo->id}}" class="block2-overlay trans-0-4">
                                            @auth
                                                @if ($isInFavourite != null )
                                                    @if( !$isInFavourite->favorito )
                                                        <a href="#"  data-product-id="{{$botijaInfo->id}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    @else
                                                        <a href="#"  data-product-id="{{$botijaInfo->id}}" class="block2-btn-towishlist hov-pointer trans-0-4">
                                                    @endif
                                                @else
                                                    <a href="#"  data-product-id="{{$botijaInfo->id}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                @endif

                                                @if ($isInFavourite != null )
                                                    @if( !$isInFavourite->favorito )
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    @else
                                                        <i class="icon-wishlist icon_heart" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart_alt dis-none" aria-hidden="true"></i>
                                                    @endif
                                                @else
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                @endif
                                                    </a>
                                            @endAuth

                                            <div data-product-id="{{$botijaInfo->id}}" class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 addToCart">
                                                    Adicionar ao Carrinho
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="{{URL('produto/' . $botijaInfo->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$botijaInfo->nome}}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
										{{$botijaInfo->preco}}€
									</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>

</div>

@endsection
