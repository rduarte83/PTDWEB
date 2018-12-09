@extends("layouts.default")
@section("title")
    Carrinho
@endsection
@section("content")

    <!-- Fazer Menu de escolha ... -->
    <!-- Menu -->
    <div class="bg5">
        <!-- Header desktop -->
        <div class="container-menu">
            <div class="wrap_header">
                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="{{URL("carrinho")}}"
                                @if($page ==  "carrinho")
                                    class="font-weight-bold"
                                @endif
                                >Carrinho
                                </a>

                            </li>

                            <span class="linedivide1"></span>

                            <li>
                                <a href="{{URL("carrinho/detalhes")}}"
                                @if($page ==  "detalhes")
                                    class="font-weight-bold"
                                @endif
                                >Detalhes de compra</a>
                            </li>

                            <span class="linedivide1"></span>

                            <li>
                                <a href="{{URL("carrinho/resumo")}}"
                                @if($page ==  "resumo")
                                    class="font-weight-bold"
                                @endif
                                >Resumo</a>
                            </li>

                            <span class="linedivide1"></span>

                            <li>
                                <a href="{{URL("carrinho/final")}}"
                                @if($page ==  "final")
                                    class="font-weight-bold"
                                @endif
                                >Final</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="bg-white mobile-profile-menu">
            <nav class="menu">
                <ul class="main_menu menu-profile">
                    <span class="linedivide-mobile"></span>

                    <li>
                        <a href="{{URL("carrinho")}}"
                        @if($page == "info" || $page ==  "carrinho")
                            class="font-weight-bold"
                        @endif
                        >Carrinho
                        </a>

                    </li>

                    <span class="linedivide"></span>

                    <li>
                        <a href="{{URL("carrinho/detalhes")}}"
                        @if($page ==  "detalhes")
                            class="font-weight-bold"
                        @endif
                        >Detalhes de compra</a>
                    </li>

                    <span class="linedivide"></span>
                    <li>
                        <a href="/carrinho/resumo"
                        @if($page ==  "resumo")
                            class="font-weight-bold"
                        @endif
                        >Resumo</a>
                    </li>

                    <span class="linedivide"></span>

                    <li>
                        <a href="{{URL("carrinho/final")}}"
                        @if($page ==  "final")
                            class="font-weight-bold"
                        @endif
                        >Final</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Fazer o menu que se vai incluir no carrinho -->
    @yield("content-carrinho")

@endsection
