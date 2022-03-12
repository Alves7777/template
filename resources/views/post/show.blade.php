@extends('admin')

@section('content')

{{--    @include('confirm-delete',['url' => route('page.destroy', $page->id)])--}}
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div>
                    <div class="card-header">
                        <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                            <div>
                                <a href="{{route('post.index')}}" class="btn btn-page" type="submit"
                                   style="margin-right: 0px;">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <h5>
                            <i class="fas fa-th-list"></i>
                            Detalhes da página
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    <hr>
                    <h1>{{ $posts->title }}</h1>
                    <div>
                           {{ $posts->body }}
                    </div>

                    @include('post.comments.comment')
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    {{--    <script src="{{asset('js/validation-form/validation-form.js')}}"></script>--}}
@stop


