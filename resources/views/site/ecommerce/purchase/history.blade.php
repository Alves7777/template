@extends('layouts.ecommerce')

@section('content')
    <div class="container">
        <div class="col-12">
            <h2>Minhas compras</h2>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>Data da compra</th>
                    <th>Situação</th>
                    <th></th>
                </tr>
                @foreach($list as $ped)
                    <tr>
                        <td>{{ $ped->date_order->format("d/m/Y H:i") }}</td>
                        <td>{{ $ped->statusDesc() }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info inforCompra" data-toggle="modal" data-target="#exampleModal" data-value="{{ $ped->id }}">
{{--                                <i class="fas fa-shopping-basket"></i>--}}
                                ABRIR
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalhes da Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="contentOrder">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/history.js')}}"></script>
@endsection
