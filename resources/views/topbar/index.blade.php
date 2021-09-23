@extends('admin')
@extends('admin')

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('topbar.index')}}" class="btn btn-topbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>E-mail</th>
                            <th>Fone</th>
                            <th>Ícone E-mail</th>
                            <th>Ícone Fone</th>
                            <th>Primeiro ícone</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topbar as $topbars)
                            <tr>
                                <td>{{ $topbars->email }}</td>
                                <td>{{ $topbars->phone }}</td>
                                <td>{{ $topbars->icon_email }}</td>
                                <td>{{ $topbars->icon_phone }}</td>
                                <td>{{ $topbars->icon_1 }}</td>
                                <td>
                                    <a href="{{ route('topbar.show', $topbars->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('topbar.edit', $topbars->id  ) }}"
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


