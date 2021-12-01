@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('title', 'Título', ['class' => 'control-label'])}}
                {{ Form::text('title', $item->title ?? old('color_icon'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('color_title', 'Cor Título', ['class' => 'control-label'])}}
                {{ Form::color('color_title',$item->color_title ?? old('icon'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text', 'Texto', ['class' => 'control-label'])}}
                {{ Form::text('text', $item->text ?? old('text'), ['placeholder' => '', 'class'=>'form-control'])}}
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
