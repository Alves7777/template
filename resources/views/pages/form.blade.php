@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('url', 'Título', ['class' => 'control-label'])}}
                {{ Form::text('title',$pages->title ?? old('title'), ['placeholder' => 'Digite o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
{{--                {{Form::label('url', 'Url', ['class' => 'control-label'])}}--}}
{{--                {{ Form::text('url',$pages->url ?? old('url'), ['placeholder' => 'Digite o título', 'class'=>'form-control'])}}--}}
                <div class="form-group mb-4">
                    <label class="mr-sm-2" for="languages-select">Link Título 1</label>
                    <select name="url" class="custom-select mr-sm-2" id="languages-select">
                        <option value="{{ $pages->url ?? old('url') }}" selected="">Selecione a Página</option>
                    </select>
                </div>
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


