@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('icon', 'Ícone', ['class' => 'control-label']) }}
                {{ Form::text('icon', $contact['icon'] ?? old('icon'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('title', 'Título', ['class' => 'control-label']) }}
                {{ Form::text('title', $contact['title'] ?? old('title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('text', 'Texto', ['class' => 'control-label']) }}
                {{ Form::text('text', $contact['text'] ?? old('text'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('iframe', 'Localização', ['class' => 'control-label']) }}
                {{ Form::iframe('iframe', $contact['iframe'] ?? old('iframe'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
