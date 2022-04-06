function loading() {
    let idSession = document.getElementById('sessionId').value;
    PagSeguroDirectPayment.setSessionId(idSession)
}

function insert() {
    loading();
    PagSeguroDirectPayment.onSenderHashReady(function (response) {
        if (response.status == 'error') {
            console.log(response.message);
            return false;
        }
        let hash = response.senderHash; //Hash estará disponível nesta variável.
        $(".hashseller").val(hash);
        // console.log(hash)
    });

    let ncredit = $("#ncredit").val();
    $("#bandeira").val("");

    if (ncredit.length > 6) {
        //     let prefixCartao = ncredit.substr(0, 60);
        PagSeguroDirectPayment.getBrand({
            cardBin: ncredit,
            success: function (response) {
                // console.log(response.brand.name)
                $("#bandeira").val(response.brand.name);
            },
            error: function (response) {
                console.log(response)
                alert('Numero de cartão inválido!')
            }
        });
    } else {
        alert('Numero de cartão inválido!');
    }

}

function insertParcels() {

    let totalEnding = $("#totalending").val();
    let bandeira = $("#bandeira").val();
    let totalParcelas = $(".nparcels").val();

    if (bandeira == "") {
        alert('Prencha o numero do cartão válido!');
    }

    PagSeguroDirectPayment.getInstallments({
        amount: parseFloat(totalEnding),
        maxInstallmentNoInterest: 2,
        brand: bandeira,
        success: function (response) {
            console.log(response)
            let status = response.error
            if (status) {
                alert('Não foi encontrada a opção de parcelamento!')
                return;
            }

            let indice = totalParcelas - 1;
            let totalPagar = response.installments[bandeira][indice].totalAmount;
            let valorTotalParcela = response.installments[bandeira][indice].installmentAmount;

            $(".totalpart").val(valorTotalParcela);
            $(".totalPagar").val(totalPagar);

        },
        error: function (response) {
            console.log(response)
        },
    });

}

function pagar() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let numberCart = $("#ncredit").val();
    let codCvv = $(".ncvv").val();
    let anoExp = $(".anoexp").val();
    let mesExp = $(".mesexp").val();
    let hashseller = $(".hashseller").val();
    let bandeira = $(".bandeira").val();

    PagSeguroDirectPayment.createCardToken({
        cardNumber: numberCart, // Número do cartão de crédito
        brand: bandeira, // Bandeira do cartão
        cvv: codCvv, // CVV do cartão
        expirationMonth: mesExp, // Mês da expiração do cartão
        expirationYear: anoExp, // Ano da expiração do cartão, é necessário os 4 dígitos.
        success: function (response) {
            $("input[name=cardToken]").val(response.card.token)
            $.post('/cart/finish', {
                hashseller: hashseller,
                cardtoken: response.card.token,
                npacelas: $(".nparcels").val(),
                totalPagar: $(".totalPagar").val(),
                totalpart: $(".totalpart").val(),
                totalteste: $(".totalending").val(),

                numberCart: $("#ncredit").val(),
                codCvv: $(".ncvv").val(),
                anoExp: $(".anoexp").val(),
                mesExp: $(".mesexp").val(),
                bandeira: $(".bandeira").val(),
            }, function (result) {
                alert(result);
            });

        },
        error: function (error) {
            alert('Não pode buscar token do cartão, verificar todos os campos!')
            console.log(error)
        }

    })

}

function createTransactionCard()
{
    let data = $("#form").serialize()

    $.ajax({
        url: "/payment/cart",
        method: "POST",
        data: data
    }).done(function (data) {
        console.log(data)
        alert(data)
    }).fail(function () {
        alert('fail request!!!')
    })

}
