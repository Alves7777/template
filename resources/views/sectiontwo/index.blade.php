@extends('admin')

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('sectionone.index')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>URL</th>
                            <th>Ícon</th>
                            <th>Cor Ícon</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($getSectionTwo as $item)
                            <tr>
                                <td>{{ $item['title'] }}</td>
                                <td>{{ $item['description'] }}</td>
                                <td>{{ $item['url'] }}</td>
                                <td>{{ $item['icon'] }}</td>
                                <td>{{ $item['color_icon'] }}</td>
{{--                                <td>--}}
{{--                                    <a href="{{ route('sectionone.show', $sectionones->id  ) }}"--}}
{{--                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>--}}
{{--                                    <a href="{{ route('sectionone.edit', $sectionones->id  ) }}"--}}
{{--                                       type="button" class="btn btn-primary btn-sm">Editar</a>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop


