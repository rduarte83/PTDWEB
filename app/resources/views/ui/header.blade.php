
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

              <div class="pos-relative bo11 of-hidden">
                <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Procurar produtos...">

                <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                  <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                </button>
              </div>

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
                <img src="{{URL("images/icons/icon-header-01.png")}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                @if(Session::has('isLogged'))
                    {{ session("name") }}
                @endif
              <div class="card-body">
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
                @endif
              </div>
            <!--  -->
                <!-- Header cart noti -->
                <div class="header-cart header-dropdown">
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

          <div class="header-wrapicon2">
            <img src="{{URL::asset("images/icons/icon-header-02.png")}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">1</span>

            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">

                <!-- Card Item Example-->

                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="{{URL::asset("images/garrafas/butano-13kg.png")}}" alt="IMG">
                  </div>
                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                      Botija de gás Propano - GALP
                    </a>

                    <span class="header-cart-item-info">
                      1 x 19.00€
                    </span>
                  </div>
                </li>
              </ul>

              <div class="header-cart-total">
                Total: 500€
              </div>

              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="{{URL("carrinho")}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                      Carrinho
                  </a>
                </div>

                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="{{URL("carrinho/resumo")}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Checkout
                  </a>
                </div>
              </div>
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
                <img src="{{URL::asset("images/icons/icon-header-01.png")}}" class="header-icon1 js-show-header-dropdown" alt="ICON">

                <!-- Header cart noti -->
                <div class="header-cart header-dropdown">
                  <ul class="header-cart-wrapitem">
                    @include('includes.login-cliente')
                    </ul>
                </div>
          </div>
			
			<!-- END USER DROPDOWN -->

          <span class="linedivide2"></span>

          <div class="header-wrapicon2">
            <img src="{{URL::asset("images/icons/icon-header-02.png")}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">1</span>

            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">
                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="{{URL::asset("images/garrafas/butano-13kg.png")}}" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="#" class="header-cart-item-name">
                        Botija de gás Propano - GALP
                    </a>

                    <span class="header-cart-item-info">
                      1 x 19.00€
                    </span>
                  </div>
                </li>
              </ul>

              <div class="header-cart-total">
                Total: $75.00
              </div>

              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="{{URL("perfil/carrinho")}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Carrinho
                  </a>
                </div>

                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="{{URL("carrinho/resumo")}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Checkout
                  </a>
                </div>
              </div>
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
