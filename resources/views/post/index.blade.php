@extends('admin')

@section('content')
{{--    @include('sweetalert::alert')--}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header test" style="display: flex; justify-content: flex-end;align-items: center;">
                    <div>

                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap" id="table">
                        <thead>
                        <tr>
{{--                            <th>Poste</th>--}}
                            <th>Título</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="{{ route('post.show', $item->id  ) }}"
                                       type="button" class="btn btn-secondary btn-sm">Detalhes</a>
{{--                                    <a href="{{ route('pages.edit', $pages->id  ) }}"--}}
{{--                                       type="button" class="btn btn-primary btn-sm">Editar</a>--}}
                                </td>

                            </tr>
                        @endforeach
{{--                        {!! $posts->links() !!}--}}
                        </tbody>'
                    </table>
                    @if(isset($search))
                        {{ $posts->appends($search)->links('pagination::bootstrap-4') }}
                    @else
                        {{ $posts->links('pagination::bootstrap-4') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop


