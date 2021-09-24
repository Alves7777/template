@csrf
<div class="row">
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('logo', 'Logo', ['class' => 'control-label'])}}
                {{ Form::file('logo',$navbar->logo ?? old('logo'), ['accept'=>'image/*','placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('title_1', 'Titulo 1', ['class' => 'control-label']) }}
                {{ Form::text('title_1', $navbar->title_1 ?? old('title_1'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_2', 'Titulo 2', ['class' => 'control-label'])}}
                {{ Form::text('title_2', $navbar->title_2 ?? old('title_2'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_3', 'Titulo 3', ['class' => 'control-label'])}}
                {{ Form::text('title_3',$navbar->title_3 ?? old('title_3'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_4', 'Titulo 4', ['class' => 'control-label'])}}
                {{ Form::text('title_4',$navbar->title_4 ?? old('title_4'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('title_5', 'Titulo 5', ['class' => 'control-label']) }}
                {{ Form::text('title_5', $navbar->title_5 ?? old('title_5'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('title_6', 'Titulo 6', ['class' => 'control-label'])}}
                {{ Form::text('title_6', $navbar->title_6 ?? old('title_6'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_7', 'Titulo 7', ['class' => 'control-label'])}}
                {{ Form::text('title_7',$navbar->title_7 ?? old('title_tree'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_8', 'Titulo 8', ['class' => 'control-label'])}}
                {{ Form::text('title_8',$navbar->title_8 ?? old('title_8'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('title_9', 'Titulo 9', ['class' => 'control-label']) }}
                {{ Form::text('title_9', $navbar->title_9 ?? old('title_9'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_10', 'Titulo 10', ['class' => 'control-label'])}}
                {{ Form::text('title_10', $navbar->title_10 ?? old('title_10'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_11', 'Titulo 11', ['class' => 'control-label'])}}
                {{ Form::text('title_11',$navbar->title_11 ?? old('title_11'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
