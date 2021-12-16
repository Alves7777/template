@extends('site.master.layout')

@section('content')
    <main class="container" id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs ======= -->
        <h1>Cadastrar Cliente</h1>
        <form action="{{ route('add_client') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-6">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-8">
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-1">
                    <div class="form-group">
                        <label for="number">Número</label>
                        <input type="text" name="number" id="number" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-3">
                    <div class="form-group">
                        <label for="complement">Complemento</label>
                        <input type="text" name="complement" id="complement" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-4">
                    <div class="form-group">
                        <label for="city">Cidade</label>
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-4">
                    <div class="form-group">
                        <label for="state">Estado</label>
                        <input type="text" name="state" id="state" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-4">
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" id="cep" class="form-control">
                    </div>
                </div>
                <br>
                <div class="card-footer">
                    {{ Form::submit('Cadastrar', ['class' => 'btn btn-success btn-sm']) }}
                </div>
            </div>
        </form>
    </main>
    <!-- End #main -->
    <script>

        $("#cpf").mask("000.000.000-00");

    </script>
@endsection

