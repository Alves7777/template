@extends('layouts.ecommerce')

@section('content')
    <main class="container" id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs ======= -->
        <h1>Carrinho</h1>

        @if(isset($cart) && count($cart) > 0)

            <table class="table">
                <thead>
                    <th></th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </thead>
                <tbody>
                @foreach($cart as $index => $p)
                    <td>
                        <a href="{{ route('cart_delete', ['index' => $index ]) }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>Excluir
                        </a>
                    </td>
                    <td>{{ $p->name }}</td>
                    <td><img src="{{ asset($p->photo) }}" height="50"></td>
                    <td>{{ $p->value }}</td>
                    <td>{{ $p->description }}</td>
                </tbody>
                @endforeach
            </table>

        @else
            <p>Nenhum item o carrinho</p>
        @endif
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection
