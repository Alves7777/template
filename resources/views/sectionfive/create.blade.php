@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                        <div>
                            <a href="{{route('sectionfive.index')}}" class="btn btn-topbar" type="submit"
                               style="margin-right: 0px;">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <h5>
                        <i class="fas fa-th-list"></i>
                        Adicionar Seção 5
                    </h5>
                </div>
{{--                @include('layouts.alerts')--}}
                <div class="card-body">
                    <form action="{{ route('sectionfive.store') }}" method="post" enctype="multipart/form-data">
                        @include('sectionfive.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script src="{{asset('js/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/sectionfive/sectionfive.js')}}"></script>
@stop


