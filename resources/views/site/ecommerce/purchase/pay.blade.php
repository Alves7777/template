@extends('layouts.ecommerce')

@section('content')
    <input type="texxt" name="hashseller" class="hashseller">
    <form class="container p-3">
        <div class="row">
            <div class="col-4">
                Cartão de crédito:
                <input type="text" name="ncredit" class="ncredit form-control">
            </div>
            <div class="col-4">
                CVV:
                <input type="text" name="ncvv" class="ncvv form-control">
            </div>
            <div class="col-4">
                Mês Expiração:
                <input type="text" name="mesexp" class="mesexp form-control">
            </div>
            <div class="col-4">
                Ano de Expiração:
                <input type="text" name="anoexp" class="anoexp form-control">
            </div>
            <div class="col-4">
                Nome do cartão:
                <input type="text" name="namecart" class="namecart form-control">
            </div>
            <div class="col-4">
                Parcelas:
                <input type="text" name="nparcels" class="nparcels form-control">
            </div>
            <div class="col-4">
                Valor total:
                <input type="text" name="totalending" class="totalending form-control">
            </div>
            <div class="col-4">
                Valor Parcelas:
                <input type="text" name="totalpart" class="totalpart form-control">
            </div>
            <input style="display: none" value="{{ $sessionID }}" name="id">
            @csrf
            <hr>
        </div>
        <input type="button" value="Pagar" class="btn btn-lg btn-success pay">
    </form>
    <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/pay.js')}}"></script>
{{--    <script>--}}
{{--        alert('sfsfsfsfsfs')--}}
{{--        function loading() {--}}
{{--            PagSeguroDirectPayment.setSessionId({{ $sessionID }})--}}
{{--            console.log(PagSeguroDirectPayment.setSessionId({{ $sessionID }} ))--}}
{{--        }--}}

{{--        $(document).ready(function () {--}}
{{--            loading();--}}

{{--            $('.ncredit').on('blur', function () {--}}
{{--                PagSeguroDirectPayment.onSenderHasReady(function (response) {--}}
{{--                    if (response.status == "error") {--}}
{{--                        console.log(response.message)--}}
{{--                        return false;--}}
{{--                    }--}}

{{--                    let hash = response.senderHash--}}
{{--                    $(".hashseller").val(hash)--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
