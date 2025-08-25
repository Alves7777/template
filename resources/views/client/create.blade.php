@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Cliente</h1>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug (URL)</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="template" class="form-label">Template</label>
                <input type="text" name="template" id="template" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@endsection
