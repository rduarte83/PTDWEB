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

        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            var idProduct = $(this).data("product-id");
            var url = "{{URL("carrinho/add")}}";
            addItemToCart(idProduct, 1, url);
            swal(nameProduct, "foi adicionado ao carrinho!", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "foi adicionado aos favoritos!", "success");
        });
    });

</script>

<!--===============================================================================================-->
<script src="{{URL::asset("js/main.js")}}"></script>

<!--===============================================================================================-->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet'/>
