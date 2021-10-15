@extends('admin')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                        <div>
                            <a href="{{route('pages.index')}}" class="btn btn-navbar" type="submit"
                               style="margin-right: 0px;">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <h5>
                        <i class="fas fa-th-list"></i>
                        Adicionar Página
                    </h5>
                </div>
                {{--                @include('layouts.alerts')--}}
                <div class="card-body">
                    <form action="{{route('pages.store')}}" method="post" enctype="multipart/form-data">
                        @include('pages.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            lang: "pt-BR",
            height: 300,
            minHeight: null,
            maxHeight: 500,
            focus: true
        });
    </script>
@stop





