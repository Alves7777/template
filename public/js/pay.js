function loading() {
    // let input = document.querySelector("#id");
    // let text = input.value;
    // console.log(text);

    PagSeguroDirectPayment.setSessionId('text')
    console.log(PagSeguroDirectPayment.setSessionId('text'))
}

$(function () {
    loading();

    $('.ncredit').on('blur', function () {
        PagSeguroDirectPayment.onSenderHasReady(function (response) {
            if (response.status == "error") {
                console.log(response.message)
                return false;
            }

            let hash = response.senderHash
            $(".hashseller").val(hash)
        });
    });
});


