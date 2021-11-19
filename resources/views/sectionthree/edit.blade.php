@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                        <div>
                            <a href="{{route('sectionthree.index')}}" class="btn btn-section-three" type="submit"
                               style="margin-right: 0px;">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <h5>
                        <i class="fas fa-th-list"></i>
                        Editar Seção 3
                    </h5>
                </div>
                {{--                @include('layouts.alerts')--}}
                <div class="card-body">
                    <form action="{{route('sectionthree.update', $sectionThree->id)}}" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        @include('sectionthree.form')
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
    <script src="{{asset('js/sectionthree/sectionthree.js')}}"></script>
@stop


