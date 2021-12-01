@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('color_icon', 'Cor Ìcone', ['class' => 'control-label']) }}
                {{ Form::color('color_icon', $item->color_icon ?? old('color_icon'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text', 'Texto', ['class' => 'control-label'])}}
                {{ Form::text('text', $item->text ?? old('text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon', 'Ícone', ['class' => 'control-label'])}}
                {{ Form::text('icon',$item->icon ?? old('icon'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('sub_title', 'Subtítulo', ['class' => 'control-label'])}}
                {{ Form::text('sub_title', $item->sub_title ?? old('sub_title'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('sub_text', 'Subtexto', ['class' => 'control-label'])}}
                {{ Form::text('sub_text', $item->sub_text ?? old('sub_text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'Subtexto', ['class' => 'control-label'])}}
                {{ Form::text('url', $item->url ?? old('url'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
