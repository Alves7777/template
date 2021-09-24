@extends('admin')

@section('content')

    @include('confirm-delete',['url' => route('sectionone.destroy', $sectionone->id)])
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div>
                    <div class="card-header">
                        <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                            <div>
                                <a href="{{route('sectionone.index')}}" class="btn btn-sectionone" type="submit"
                                   style="margin-right: 0px;">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <h5>
                            <i class="fas fa-th-list"></i>
                            Detalhes da Seção 1
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Título_1: </strong>{{ $sectionone->title  }}</p>
                    <p><strong>Título_2: </strong>{{ $sectionone->description  }}</p>
{{--                    <p><strong>Foto:</strong><br>--}}
{{--                        <img src="{{ asset("/storage/$sectionone->photo") }}"--}}
{{--                             alt="{{ $sectionone->name }}"--}}
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


