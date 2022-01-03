@extends('admin')

@section('content')
    @include('sweetalert::alert')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('sectionfive.index')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Background</th>
                            <th>Image</th>
                            <th>Cor Título</th>
                            <th>Texto</th>
                            <th>Url</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sectionfive as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td><img src="{{ asset("/storage/$item->image") }}" class="testimonial-img"
                                         width="70"></td>
                                <td><img src="{{ asset("/storage/$item->background") }}" class="testimonial-img"
                                         width="70"></td>
                                <td>{{ $item->color_title }}</td>
                                <td>{{ $item->text }}</td>
                                <td>{{ $item->url }}</td>
                                <td>
                                    <a href="{{ route('sectionfive.show', $item->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('sectionfive.edit', $item->id  ) }}"
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


