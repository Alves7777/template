@extends('admin')

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('progress.index')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <a href="{{route('export-excel')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-file-excel"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>Nome Progresso</th>
                            <th>Porcentagem</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($progress as $test)
                            <tr>
                                <td>{{ $test->progress_name }}</td>
                                <td>{{ $test->percentage }}</td>
                                <td>
                                    <a href="{{ route('progress.show', $test->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('progress.edit', $test->id  ) }}"
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
