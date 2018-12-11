@extends("layouts.default")
@section("title")
    Profile
@endsection
@section("content")

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
                                <a href="{{URL("perfil/info")}}"
                                @if($page == "info" || $page ==  "perfil")
                                    class="font-weight-bold"
                                @endif
                                >Perfil
                                </a>

                            </li>

                            <span class="linedivide1"></span>

                            <li>
                                <a href="{{URL("perfil/favoritos")}}"
                               @if($page ==  "favoritos")
                                   class="font-weight-bold"
                                @endif
                                >Favoritos</a>
                            </li>

                            <span class="linedivide1"></span>

                            <li>
                                <a href="{{URL("perfil/historico")}}"
                                @if($page ==  "historico")
                                    class="font-weight-bold"
                                @endif
                                >Histórico</a>
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
                        <a href="{{URL("perfil/info")}}"
                           @if($page == "info" || $page ==  "perfil")
                           class="font-weight-bold"
                            @endif
                        >Perfil
                        </a>

                    </li>

                    <span class="linedivide"></span>

                    <li>
                        <a href="{{URL("perfil/favoritos")}}"
                           @if($page ==  "favoritos")
                           class="font-weight-bold"
                            @endif
                        >Favoritos</a>
                    </li>

                    <span class="linedivide"></span>

                    <li>
                        <a href="{{URL("perfil/historico")}}"
                           @if($page ==  "historico")
                           class="font-weight-bold"
                            @endif
                        >Histórico</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Content-->
    @yield("content-profile")

@endsection
