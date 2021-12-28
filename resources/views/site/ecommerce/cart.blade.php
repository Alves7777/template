@extends('layouts.ecommerce')

@section('content')
    <main class="container" id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs ======= -->
        <h1>Carrinho</h1>

        @if(isset($cart) && count($cart) > 0)

            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $index => $p)
                    <tr>
                        <td>
                            <a href="{{ route('cart_delete', ['index' => $index ]) }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>Excluir
                            </a>
                        </td>
                        <td>{{ $p->name }}</td>
                        <td><img src="{{ asset($p->photo) }}" height="50"></td>
                        <td>{{ $p->value }}</td>
                        <td>{{ $p->description }}</td>
                    </tr>
                </tbody>
                @endforeach

                <tfoot>
                <tr>
                    <td colspan="5">
                        Total do Carrinho: R$ {{ $totalProduct }}
                    </td>
                </tr>
                </tfoot>
            </table>

            <form method="post" action="{{ route('pay') }}">
                @csrf
                <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success">
            </form>

        @else
            <p>Nenhum item o carrinho</p>
        @endif
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection
