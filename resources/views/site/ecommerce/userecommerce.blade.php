@extends('site.master.layout')

@section('content')

    <div class="container">
        <div class="col-12">
            <h2 class="mb-3">
                Logar no sistema
            </h2>

            <form action="{{ route('user-ecommerce') }}" class="action" method="post">
                @csrf
                <div class="form-group">
                    Login
                    <input type="text" name="login" class="form-control">
                </div>
                <div class="form-group">
                    Senha
                    <input type="password" name="password" class="form-control">
                </div>
                <hr>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
