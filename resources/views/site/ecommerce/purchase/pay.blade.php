@extends('layouts.ecommerce')

@section('content')
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <input style="display: none" type="text" name="hashseller" class="hashseller">
    <input style="display: none" type="text" id="sessionId" value="{{ $sessionID }}" name="ncredit" class="ncredit form-control">
    <input style="display: none" type="hidden" id="cardToken" name="cardToken" class="cardToken form-control">
    <form class="container p-3" id="form">

        @if(isset($cart) && count($cart) > 0)

            <table style="display: none" class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $index => $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->value }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        @endif

        <div class="row">
            <div class="col-4">
                Cartão de crédito:
                <input type="text" name="ncredit" onblur="insert()" id="ncredit" class="ncredit form-control">
            </div>

            <div class="col-4">
                Bandeira:
                <input type="text" name="bandeira" id="bandeira" disabled class="bandeira form-control">
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
                <input type="text" name="nparcels" onblur="insertParcels()" id="nparcels" class="nparcels form-control">
            </div>
            <div class="col-4">
                Valor total:
                <input type="text" name="totalending"  id="totalending" value="{{ $totalProduct }}" disabled readonly class="totalending form-control">
            </div>
            <div class="col-4">
                Valor Parcelas:
                <input type="text" disabled name="totalpart" class="totalpart form-control">
            </div>
            <div class="col-4">
                Valor à Pagar:
                <input type="text" disabled name="totalPagar" id="totalPagar" class="totalPagar form-control">
            </div>
            @csrf
            <hr>
        </div>
        <input type="button" onclick="pagar()" value="Pagar" class="btn btn-lg btn-success pay">
    </form>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/pay.js')}}"></script>
@endsection
