@extends('admin')

@section('content')
    @include('sweetalert::alert')

    <div id="navbar" class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
{{--                    <example-component></example-component>--}}
                    <div>
                                <a href="{{ route('navbar.index', ['user' => request()->route('user') ?? $user->id ?? $client_slug ?? '1']) }}" class="btn btn-navbar" type="submit"
                                    style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>Primeiro Titulo</th>
                            <th>Segundo Titulo</th>
                            <th>Terceiro Titulo</th>
                            <th>Quarto Titulo</th>
                            <th>Quinto Titulo</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($navbar as $navbars)
                            <tr>
                                <td>{{ $navbars->title_1 }}</td>
                                <td>{{ $navbars->title_2 }}</td>
                                <td>{{ $navbars->title_3 }}</td>
                                <td>{{ $navbars->title_5 }}</td>
                                <td>{{ $navbars->title_6 }}</td>
                                <td>
                                                <a @click="test" href="{{ route('navbar.show', ['user' => request()->route('user') ?? $user->id ?? $client_slug ?? '1', 'navbar' => $navbars->id]) }}"
                                                    type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                                <a href="{{ route('navbar.edit', ['user' => request()->route('user') ?? $user->id ?? $client_slug ?? '1', 'navbar' => $navbars->id]) }}"
                                                    type="button" class="btn btn-primary btn-sm">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-css')

@stop

@section('page-js')
    {{--    {{$dataTable->scripts()}}--}}
@stop

