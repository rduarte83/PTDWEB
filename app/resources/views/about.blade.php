@extends("layouts.default")
@section("title")
    About
@endsection
@section("content")
    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{URL::asset("images/wallpaper2_crop_dark.jpg")}});">
        <h2 class="l-text2 t-center">
            Sobre nós
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-38">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-b-30">
                    <div class="hov-img-zoom">
                        <img src="{{URL::asset("images/logo/logo-big.jpg")}}" alt="IMG-ABOUT">
                    </div>
                </div>

                <div class="col-md-8 p-b-30">
                    <h3 class="m-text26 p-t-15 p-b-16">
                        A nossa história
                    </h3>

                    <p class="p-b-28">
                        Somos uma plataforma de venda de gás online, com a ambição de permitir a todas as pessoas adequirir gás a qualquer altura do dia.
                    </p>
                    <h3 class="m-text26 p-t-15 p-b-16">
                        Motivação
                    </h3>

                    <p class="p-b-28">
                        Modernizar o espaço de negócio de gás atual. Existem diversos problemas com o processo de compra de gás
                        atualmente, desde os problemas de horários dos comerciantes até saber o stock de gás na loja em que sem pretende
                        comprar o mesmo. Corrigir estes problemas e tornar a compra de gás a partir de qualquer lugar e a qualquer
                        hora é a prioridade desta plataforma.  
                    </p>

                </div>
            </div>
        </div>
    </section>
@endsection
