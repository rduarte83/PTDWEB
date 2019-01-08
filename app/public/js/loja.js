$(document).ready(function() {
    // TODO: buscar dados on change

    $("#formFiltersSubmit").click(function () {
        var sorting = $("select[name='sorting' ]").val();

        $( "#formFilters" ).append("<input type='hidden' name='sorting' value='"+sorting+"'>");
        $("#formFilters").submit();
    })

});

$(document).on("change", "#selectSort", function () {
    var form = $( "#sortingForm" ).serializeArray(),
        categoria = $("input[name='categoria' ]:checked").val(),
        marca = $("input[name='marca' ]:checked").val();

    $( "#sortingForm" ).append("<input type='hidden' name='categoria' value='"+categoria+"'>");
    $( "#sortingForm" ).append("<input type='hidden' name='marca' value='"+marca+"'>");
    $( "#sortingForm" ).submit();
});
