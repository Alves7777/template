@extends('admin')

@section('content')
{{--    @include('sweetalert::alert')--}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>
                        <a href="{{route('sectionsix.index')}}" class="btn btn-navbar" type="submit"
                           style="margin-right: -15px;">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Cargo</th>
                            <th>Link Twitter</th>
                            <th>Link Facebook</th>
                            <th>Link Instagram</th>
                            <th>Link Linkedin</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sectionsix as $item)
                            <tr>
                                <td>{{ $item->sub_title }}</td>
                                <td><img src="{{ asset("/storage/$item->image") }}" class="testimonial-img"
                                         width="70"></td>
                                <td>{{ $item->sub_text }}</td>
                                <td>{{ $item->link_twitter }}</td>
                                <td>{{ $item->link_facebook }}</td>
                                <td>{{ $item->link_instagram }}</td>
                                <td>{{ $item->link_linkedin }}</td>
                                <td>
                                    <a href="{{ route('sectionsix.show', $item->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
                                    <a href="{{ route('sectionsix.edit', $item->id  ) }}"
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

