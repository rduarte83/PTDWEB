function addItemToCart(id, quantidade, url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type:"post",
        dataType:"json",
        url: url,
        data: {
            productID: id,
            quantidade: quantidade
        },
        success: function(data) {
            if ( data.status === "success" ){
                atualizaCarrinho();
            }
        },
        error: function(data) {
            console.log("Error");
            console.log(data);
        },
    });
}

function destroyCarrinho(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type:"post",
        url: url,
        success: function(data) {
            console.log("Success");
            console.log(data);
        },
        error: function(data) {
            console.log("Error");
            console.log(data);
        },
    });
}

function updateItemToCart(id, quantidade, url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type:"post",
        url: url,
        data: {
            productID: id,
            quantidade: quantidade
        },
        success: function(data) {

        },
        error: function(data) {
            console.log("Error");
            console.log(data);
        },
    });
}

function atualizaCarrinho (){
    $.ajax({
        type:"get",
        url: urlCarrinhoHeader,
        success: function(data) {
            console.log(data);
            $("#carrinhoAtuliza").html(data);
        },
        error: function(data) {
            console.log("Error");
            console.log(data);
        },
    });
}


$(document).ready(function(){

    $("input[name='num-product1']").on('change', function () {
        var product = $(this).data("product-id");
        var quantidade = $(this).val();
        var preco = $("span[data-product-id-total='"+product+"']").data("preco");
        $("span[data-product-id-total='"+product+"']").html( parseFloat(quantidade*preco).toFixed(2) +" €");

        updateItemToCart(product, quantidade, urlUpdate)
    });

    $(".btn-num-product-down").click(function(){
        $("input[name='num-product1']").change();
    });

    $(".btn-num-product-up").click(function(){
        $("input[name='num-product1']").change();
    });

    $("#btn-add-cart").click(function () {
        let numProduct = $("#num-product").val();
        console.log(numProduct);
        let id = $(this).data("id");
        let name = $(".product-detail-name").html();


        addItemToCart(id,numProduct,urlCarrinhoAdd)
        swal(name, "foi adicionado ao carrinho!", "success");
    });

    /*$(".js-show-cart").on("click", function(){
        $(".header-dropdown-user").removeClass("show-header-dropdown");
        $('.header-dropdown-cart').toggleClass("show-header-dropdown");
    });*/

    $(".js-show-user").on("click", function(){
        $(".header-dropdown-user").toggleClass("show-header-dropdown");
        $(".header-dropdown-cart").removeClass("show-header-dropdown");
    });
});

$(document).on("click", '.js-show-cart', function(){
    $(".header-dropdown-user").removeClass("show-header-dropdown");
    $('.header-dropdown-cart').toggleClass("show-header-dropdown");
});
