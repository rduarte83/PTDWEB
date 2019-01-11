<?php
/**
 * Created by IntelliJ IDEA.
* User: Joao
* Date: 18/11/2018
* Time: 16:23
*/
?>

<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/bootstrap/js/popper.js")}}"></script>
<script type="text/javascript" src="{{URL::asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/select2/select2.min.js")}}"></script>
<script type="text/javascript">
    var urlUpdate = "{{URL("carrinho/update")}}";
    var urlCarrinhoHeader = "{{URL("carrinho-header/atualiza")}}";
    var urlCarrinhoAdd = "{{URL("carrinho/add")}}";
    var urlCarrinhoRemove = "{{URL("carrinho/remove")}}";
    var urlAddRemoveToFavourites = "{{URL("favoritos/addRemove")}}";
    var urlProduct = "{{URL("produto/")}}";

    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/slick/slick.min.js")}}"></script>
<script type="text/javascript" src="{{ URL::asset("js/slick-custom.js")}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/countdowntime/countdowntime.js")}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/lightbox2/js/lightbox.min.js")}}"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset("vendor/sweetalert/sweetalert.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset("js/carrinho.js")}}"></script>

<script type="text/javascript">

    $('.block2-btn-addcart').each(function(){

        let nameProduct = $(this).parent().parent().parent().find('.block2-name').html();

        $(this).on('click', function(){
            let idProduct = $(this).data("product-id");
            addItemToCart(idProduct, nameProduct, 1, urlCarrinhoAdd);
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            let idProduct = $(this).data("product-id");
            addOrRemoveFavourite(idProduct, nameProduct, urlAddRemoveToFavourites);

        });
    });

    $('.block2-btn-towishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            console.log("hey");
            let idProduct = $(this).data("product-id");
            addOrRemoveFavourite(idProduct, nameProduct, urlAddRemoveToFavourites);
        });
    });


</script>

<!--===============================================================================================-->
<script src="{{URL::asset("js/main.js")}}"></script>

<script type="text/javascript" src="{{URL::asset("js/loja.js")}}"></script>


<!--===============================================================================================-->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet'/>


