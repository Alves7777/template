@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('sub_title', 'Título', ['class' => 'control-label']) }}
                {{ Form::text('sub_title', $sectionseven['sub_title'] ?? old('sub_title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('sub_text', 'Texto', ['class' => 'control-label']) }}
                {{ Form::text('sub_text', $sectionseven['sub_text'] ?? old('sub_text'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
