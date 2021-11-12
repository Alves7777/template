@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('title', 'Título', ['class' => 'control-label'])}}
                {{ Form::text('title',$data['title'] ?? old('title'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Descrição', ['class' => 'control-label'])}}
                {{ Form::text('description', $data['description'] ?? old('description'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'Url', ['class' => 'control-label'])}}
                {{ Form::text('url', $data['url'] ?? old('url'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon', 'Ícone', ['class' => 'control-label'])}}
                {{ Form::text('icon',$data['icon'] ?? old('icon'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('color_icon', 'Cor do ícone', ['class' => 'control-label']) }}
                {{ Form::color('color_icon', $data['color_icon'] ?? old('color_icon'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>

