@csrf
<div class="row">
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('icon_email', 'Ícone e-mail', ['class' => 'control-label'])}}
                {{ Form::text('icon_email',$topbar->icon_email ?? old('icon_email'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
                {{ Form::text('email', $topbar->email ?? old('email'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_phone', 'Ícone phone', ['class' => 'control-label'])}}
                {{ Form::text('icon_phone', $topbar->icon_phone ?? old('icon_phone'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('phone', 'Fone', ['class' => 'control-label'])}}
                {{ Form::text('phone',$topbar->phone ?? old('phone'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('color_top_bar', 'Cor Topbar', ['class' => 'control-label'])}}
                {{ Form::color('color_top_bar',$topbar->color_top_bar ?? old('color_top_bar'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('icon_1', 'icon_1', ['class' => 'control-label'])}}
                {{ Form::text('icon_1', $topbar->icon_1 ?? old('icon_1'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_2', 'icon_2', ['class' => 'control-label'])}}
                {{ Form::text('icon_2',$topbar->icon_2 ?? old('icon_2'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_3', 'icon_3', ['class' => 'control-label'])}}
                {{ Form::text('icon_3',$topbar->icon_3 ?? old('icon_3'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('icon_4', 'icon_4', ['class' => 'control-label']) }}
                {{ Form::text('icon_4', $topbar->icon_4 ?? old('icon_4'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
