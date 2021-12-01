@extends('admin')

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('sectionfour.index')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>SubTítulo</th>
                            <th>SubTexto</th>
                            <th>Color Icone</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sectionfour as $item)
                            <tr>
                                <td>{{ $item->sub_title }}</td>
                                <td>{{ $item->sub_text }}</td>
                                <td>{{ $item->color_icon }}</td>
                                <td>
                                    <a href="{{ route('sectionfour.show', $item->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('sectionfour.edit', $item->id  ) }}"
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


