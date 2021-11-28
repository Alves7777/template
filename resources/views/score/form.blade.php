@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('icon', 'ìcone', ['class' => 'control-label']) }}
                {{ Form::text('icon', $item->icon ?? old('icon'), ['placeholder' => '','class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{ Form::label('number', 'Número', ['class' => 'control-label']) }}
                {{ Form::number('number', old($item->number ?? 'number'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Nome', ['class' => 'control-label']) }}
                {{ Form::text('name', old($item->name ?? 'name'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
