function addItemToCart(id, quantidade, url){
    console.log("here");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type:"post",
        //dataType:"json",
        url: url,
        data: {
            productID: id,
            quantidade: quantidade
        },
        success: function(data) {
            console.log("Success");
            console.log(data);
            /*successmessage = 'Data was succesfully captured';
            $("label#successmessage").text(successmessage);*/
        },
        error: function(data) {
            console.log("Error");
            console.log(data);
            /*successmessage = 'Error';
            $("label#successmessage").text(successmessage);*/
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
