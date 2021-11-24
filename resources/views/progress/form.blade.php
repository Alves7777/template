@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('progress_name', 'Nome progresso', ['class' => 'control-label'])}}
                {{ Form::text('progress_name', $test->progress_name ?? old('progress_name'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('percentage', 'Porcentagem', ['class' => 'control-label']) }}
                {{ Form::number('percentage', $test->percentage ?? old('percentage'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
