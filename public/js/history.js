$(document).ready(function () {
    $(".inforCompra").on("click", function () {
        let id = $(this).attr("data-value");
        $.post('/purchase/details', { idOrder : id }, (result) => {
            $("#contentOrder").html(result);
        });
    });
});
