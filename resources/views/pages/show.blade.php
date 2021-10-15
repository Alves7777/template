@extends('admin')

@section('content')

    @include('confirm-delete',['url' => route('page.destroy', $page->id)])
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div>
                    <div class="card-header">
                        <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                            <div>
                                <a href="{{route('page.index')}}" class="btn btn-page" type="submit"
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
                    <p><strong>Título_1: </strong>{{ $page->phone  }}</p>
                    <p><strong>Título_2: </strong>{{ $page->email  }}</p>
{{--                    <p><strong>Foto:</strong><br>--}}
{{--                        <img src="{{ asset("/storage/$page->photo") }}"--}}
{{--                             alt="{{ $page->name }}"--}}
{{--                             style="border-radius: 35px; width: 150px; height: 150px">--}}
                    </p>
                    <hr>
                    <div>
                        {{ Form::submit('Excluir', ['class' => 'btn btn-outline-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#confirm-delete',
                                'data-bs-toggle' => 'modal', 'data-bs-target' => '#confirm-delete']) }}

{{--                        <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirm-delete"--}}
{{--                                data-bs-toggle="modal" data-bs-target="#confirm-delete">--}}
{{--                            Excluir--}}
{{--                        </button>--}}
                    </div>
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


