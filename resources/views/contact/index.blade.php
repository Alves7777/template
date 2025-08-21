@extends('admin')

@section('content')
{{--    @include('sweetalert::alert')--}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('contact.index')}}" class="btn btn-navbar" type="submit"
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
                            <th>Título</th>
                            <th>Texto</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contact as $item)
                            <tr>
                                <td>{{ $item->icon }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->text }}</td>
                                <td>
                                    <a href="{{ route('contact.show', $item->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('contact.edit', $item->id  ) }}"
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
