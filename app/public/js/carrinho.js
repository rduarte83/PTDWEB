// Add item to cart
function addItemToCart(id, nomeProduto, quantidade, url){
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
                swal(nomeProduto, "foi adicionado ao carrinho!", "success");
                atualizaCarrinho();
            }
        },
        error: function(data) {
            console.log("Error");
            console.log(data);
        },
    });
}

// Remove item from cart
function removeItemFromCart(id, url){
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
            productID: id
        },
        success: function(data) {
            if ( data.status === "success" ){
                //swal(nomeProduto, "foi adicionado ao carrinho!", "success");
                atualizaCarrinho();
            }
        },
        error: function(data) {
            console.log("Error");
            console.log(data.responseText);
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
            $(".carrinhoAtuliza").html(data);
            $(".carrinhoAtuliza-mobile").html(data);
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


// Get it from global ( Dynamic )
$(document).on("click", '.js-show-cart', function(){
    $(".header-dropdown-user").removeClass("show-header-dropdown");
    $('.header-dropdown-cart').toggleClass("show-header-dropdown");
});

$(document).on("click", ".header-cart-item-img", function () {
    let productID = $(this).data("product-id");

    removeItemFromCart(productID, urlCarrinhoRemove);
    console.log("clicaste no produto-"+productID);
});
