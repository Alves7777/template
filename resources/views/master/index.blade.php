@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Usuários do Sistema</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cliente</th>
                    <th>is_master</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->client ? $user->client->name : '-' }}</td>
                        <td>{{ $user->is_master ? 'Sim' : 'Não' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
