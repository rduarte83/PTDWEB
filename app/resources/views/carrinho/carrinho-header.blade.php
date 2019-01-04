<div class="header-wrapicon2">
    <img src="{{URL::asset("images/icons/icon-header-02.png")}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
    <span  class="header-icons-noti itens-carrinho">1</span>
    <!-- Header cart noti -->
    <div class="header-cart header-dropdown">
        <ul class="header-cart-wrapitem">

            <!-- Card Item Example-->
            <?php
            use Illuminate\Support\Facades\Auth;
            $numItems = 0;
            $precoFinal = 0;
            if (Session::has("carrinho") ||  Auth::check()):


                if(Auth::check()){
                    $carrinho = \App\Carrinho::all()->where("utilizador", Auth::user()->id)->first();
                    $botijasCarrinhos = \App\BotijaCarrinho::all()->where('carrinhosid',$carrinho->id);
                }else{
                    $botijasCarrinhos = Session::get("carrinho");
                }
            ?>

            @foreach ($botijasCarrinhos as $botijasCarrinho)
                <?php
                    if(Auth::check()){
                        $botijas = \App\Product::all()->where('id',$botijasCarrinho->botijasid);
                    }else{
                        $botijas = \App\Product::all()->where('id',$botijasCarrinho["botijasid"]);
                    }
                ?>

                @foreach ($botijas as $botija)
                <li class="header-cart-item">
                    <div class="header-cart-item-img">
                        <img src="{{URL::asset($botija->imagem)}}" alt="IMG">
                    </div>
                    <div class="header-cart-item-txt">
                        <a href="#" class="header-cart-item-name">
                            {{$botija->marca}} - {{$botija->nome}}
                        </a>

                        <span class="header-cart-item-info">
                            <?php
                                if(Auth::check()) {
                                    $numItems += $botijasCarrinho->quantidade;
                                    $precoFinal+= $botijasCarrinho->quantidade * $botija->preco;
                                    echo "$botijasCarrinho->quantidade x $botija->preco €";
                                }else{
                                    $numItems += $botijasCarrinho['quantidade'];
                                    $precoFinal+= $botijasCarrinho['quantidade'] * $botija->preco;
                                    echo $botijasCarrinho['quantidade'] . " x $botija->preco €";
                                }
                            ?>
                        </span>
                    </div>
                </li>
                @endforeach
            @endforeach
            <?php endif; ?>


        </ul>

        <div class="header-cart-total">
            Total: {{$precoFinal}} €
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

<script type="application/javascript">
    $(".itens-carrinho").html("{{$numItems}}")
</script>
