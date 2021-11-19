<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            {{--                        {{ Form::open([ 'id'=>"delete-form", 'action'=> [ {{$url}}, 'class'=>'form' ]]) }}}--}}
            <form id="delete-form" action="{{$url}}" class="form" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Excluir</h4>
                        {{ Form::submit('&times;', ['class' => 'close', 'data-dismiss' => 'modal', 'aria-label' => 'Close']) }}
                        {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                        <span aria-hidden="true">&times;</span>--}}
                        {{--                        </button>--}}
                    </div>
                    <div class="modal-body">
                        Opa!!! Você tem certeza que deseja excluir o esse registro?
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                    </div>
                    <div class="modal-footer">
                        {{ Form::submit('Cancelar', ['class' => 'btn btn-secondary btn-sm', 'data-dismiss' => 'modal']) }}
                        {{--                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>--}}
                        {{ Form::submit('Confirmar', ['class' => 'btn btn-danger btn-sm', 'id' => 'dataConfirmOk']) }}
                        {{--                        <button type="submit" class="btn btn-danger btn-sm" id="dataConfirmOk">Confirmar</button>--}}
                    </div>
                </div>
            </form>
            {{--            {{ Form::close() }}--}}
        </div>
    </div>
</div>


