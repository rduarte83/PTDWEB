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
                <h2 class="s-text-big t-center text-white">
                    OniGás
                </h2>
            </div>

            <div class="row">


                <div class="m-text-7 t-center">
                    <h5 class="s-text-medium t-center">
                        Sobre nós
                    </h5>
                    <br>
                    <p class="s-text-small">Somos uma empresa de venda de gás online. O nosso foco é permitir que o utilizador
                        possa comprar a sua botija de gás favorita em qualquer altura e em qualquer lugar.
                    </p>

                </div>
            </div>

        </div>
    </section>

    <!-- New Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Botijas de Gás
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @include("ui.product")
                    @for($i = 0; $i < 10; $i++)
                        @yield("product")
                    @endfor

                </div>
            </div>

        </div>
    </section>

</div>

@endsection
