@extends('admin')

@section('content')
{{--    @include('sweetalert::alert')--}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('score.index')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>Ícone</th>
                            <th>Número</th>
                            <th>Nome</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($score as $item)
                            <tr>
                                <td>{{ $item->icon }}</td>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('score.show', $item->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('score.edit', $item->id  ) }}"
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
