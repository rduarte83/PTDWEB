
<header class="header1 fixed-header">

    <!-- Header desktop -->
    <div class="container-menu-header">
      <div class="wrap_header">
        <!-- Logo -->
        <a href="{{URL("index")}}" class="logo">
            <img src="{{URL("images/logo/logo-small.png")}}" alt="IMG-LOGO">

        </a>

        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu">
            <ul class="main_menu">
                <form method="get" action="{{URL("search")}}">
                    @csrf
                    <div class="pos-relative bo11 of-hidden">
                    <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Procurar produtos...">
                    <button type="submit" class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                      <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </form>

              <span class="linedivide1"></span>

              <li>
                <a href="{{URL("loja")}}">Loja</a>
              </li>

              <span class="linedivide1"></span>

              <li>
                <a href="{{URL("mapa")}}">Mapa</a>
              </li>
            </ul>
          </nav> 
        </div>
        <!-- Header Icon -->
        <div class="header-icons">
			<!-- USER DROPDOWN -->
			<div class="header-wrapicon2">
                <div class="cs-pointer js-show-user" style="line-height: 27px;">
                    <img src="{{URL("images/icons/icon-header-01.png")}}" class="header-icon1 " alt="ICON">
                    &nbsp;

                    @auth
                        <span>{{ Auth::user()->nome }}</span>
                    @endauth
                </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
                @endif
              </div>
            <!--  -->
                <!-- Header cart noti -->
                <div class="header-cart header-dropdown header-dropdown-user" style="width: 200px; padding:4px">
                  <ul class="header-cart-wrapitem">
                      @if(!Session::get('isLogged'))
                        @include('includes.login-cliente')
                      @else
                          @include('includes.logged-cliente')
                      @endif
                  </ul>
                </div>
            </div>


			<!-- END USER DROPDOWN -->
          <span class="linedivide1"></span>
            <div class="carrinhoAtuliza">
                @include("carrinho.carrinho-header")
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="/index" class="logo-mobile">
          <img src="{{URL::asset("images/logo/logo-small.png")}}" alt="IMG-LOGO">
      </a>

      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
			<!-- USER DROPDOWN -->
			<div class="header-wrapicon2">
                <img src="{{URL::asset("images/icons/icon-header-01.png")}}" class="header-icon1 js-show-user" alt="ICON">

                <!-- Header cart noti -->
                <div class="header-cart header-dropdown header-dropdown-user">
                    <ul class="header-cart-wrapitem">
                        @if(!Session::get('isLogged'))
                            @include('includes.login-cliente')
                        @else
                            @include('includes.logged-cliente')
                        @endif
                    </ul>
                </div>
          </div>
			
			<!-- END USER DROPDOWN -->

          <span class="linedivide2"></span>
            <div class="carrinhoAtuliza-mobile">
                @include("carrinho.carrinho-header")
            </div>
          </div>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu">
      <nav class="side-menu">
        <ul class="main-menu">

            <div class="search-product pos-relative bo4 of-hidden">
                <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Procurar produtos...">
            
                <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                  <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                </button>
              </div>

          <li class="item-menu-mobile">
            <a href="{{URL("loja")}}">Loja</a>
          </li>

          <li class="item-menu-mobile">
            <a href="{{URL("mapa")}}">Mapa</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
