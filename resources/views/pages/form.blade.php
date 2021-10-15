@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('url', 'Título', ['class' => 'control-label'])}}
                {{ Form::text('title',$pages->title ?? old('title'), ['placeholder' => 'Digite o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'Url', ['class' => 'control-label'])}}
                {{ Form::text('url',$pages->url ?? old('url'), ['placeholder' => 'Digite o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Descrição', ['class' => 'control-label']) }}
                {{ Form::textarea('description', $pages->description ?? old('description'), ['placeholder' => '', 'id'=>'summernote','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>


