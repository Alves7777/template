@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bem-vindo ao site do cliente: {{ $client->name }}</h1>
        <p>URL: <strong>{{ $client->slug }}</strong></p>
        <p>Template: <strong>{{ $client->template }}</strong></p>
        <hr>
        <p>Personalize aqui o conteúdo do site/template do cliente.</p>
    </div>
@endsection
