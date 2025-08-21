@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Master</h1>
        <p><strong>Nome:</strong> {{ $masters->name }}</p>
        <p><strong>Descrição:</strong> {{ $masters->description }}</p>
    </div>
@endsection
