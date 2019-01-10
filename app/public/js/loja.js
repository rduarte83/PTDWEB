function addOrRemoveFavourite(id, productName, url){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type:"post",
        url: url,
        data: {
            productID: id
        },
        success: function(data) {
            if(data.status){
                swal(productName, data.message, data.favorito ? "success" : "error");
            }
            console.log(data);
        },
        error: function(data) {
            console.log("Error");
            console.log(data);

            swal("Error", data.responseJSON.message, "error");
        },
    });
}

var isMouseHover = false;
$(document).ready(function() {

    $("#formFiltersSubmit").click(function () {
        var sorting = $("select[name='sorting' ]").val();

        $( "#formFilters" ).append("<input type='hidden' name='sorting' value='"+sorting+"'>");
        $("#formFilters").submit();
    });

    $(".block2-btn-addwishlist")
        .mouseover( function() {
            isMouseHover = true;
            $(".block2-overlay").unbind('click', goToProduct);
        })
        .mouseout( function() {
            isMouseHover = false;
            $(".block2-overlay").bind();
        });

    $(".block2-btn-towishlist")
        .mouseover( function() {
            isMouseHover = true;
            $(".block2-overlay").unbind('click', goToProduct);
        })
        .mouseout( function() {
            isMouseHover = false;
            $(".block2-overlay").bind(goToProduct);
        });

    $(".addToCart")
        .mouseover( function() {
            isMouseHover = true;
            $(".block2-overlay").unbind('click', goToProduct);
        })
        .mouseout( function() {
            isMouseHover = false;
            $(".block2-overlay").bind(goToProduct);
        });

    $('.block2-overlay').click( function () {
        goToProduct($(this));
    });
});

function goToProduct(object) {
    if ( !isMouseHover ) {
        var id = object.data("product-id");
        var finalURL = urlProduct + "/"+ id;
        window.location.href= finalURL;
    }
}

$(document).on("change", "#selectSort", function () {
    var form = $( "#sortingForm" ).serializeArray(),
        categoria = $("input[name='categoria' ]:checked").val(),
        marca = $("input[name='marca' ]:checked").val();

    $( "#sortingForm" ).append("<input type='hidden' name='categoria' value='"+categoria+"'>");
    $( "#sortingForm" ).append("<input type='hidden' name='marca' value='"+marca+"'>");
    $( "#sortingForm" ).submit();
});



