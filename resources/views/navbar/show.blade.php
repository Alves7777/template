@extends('admin')

@section('content')

    @include('confirm-delete',['url' => route('navbar.destroy', $navbar->id)])
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div>
                    <div class="card-header">
                        <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                            <div>
                                <a href="{{route('navbar.index')}}" class="btn btn-navbar" type="submit"
                                   style="margin-right: 0px;">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <h5>
                            <i class="fas fa-th-list"></i>
                            Detalhes do Funcionário
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Título_1: </strong>{{ $navbar->titulo_1  }}</p>
                    <p><strong>Título_2: </strong>{{ $navbar->titulo_2  }}</p>
                    <p><strong>Título_3: </strong>{{ $navbar->titulo_3  }}</p>
                    <p><strong>Título_4: </strong>{{ $navbar->titulo_4  }}</p>
                    <p><strong>Título_5: </strong>{{ $navbar->titulo_5  }}</p>
                    <p><strong>Título_6: </strong>{{ $navbar->titulo_6  }}</p>
                    <p><strong>Título_7: </strong>{{ $navbar->titulo_7  }}</p>
                    <p><strong>Título_8: </strong>{{ $navbar->titulo_8  }}</p>
                    <p><strong>Título_9: </strong>{{ $navbar->titulo_9  }}</p>
                    <p><strong>Título_10: </strong>{{ $navbar->titulo_10  }}</p>
                    <p><strong>Título_11: </strong>{{ $navbar->titulo_11  }}</p>
{{--                    <p><strong>Foto:</strong><br>--}}
{{--                        <img src="{{ asset("/storage/$navbar->photo") }}"--}}
{{--                             alt="{{ $navbar->name }}"--}}
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


