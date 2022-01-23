@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('sub_title', 'Nome', ['class' => 'control-label']) }}
                {{ Form::text('sub_title', $sectionsix['sub_title'] ?? old('sub_title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('sub_text', 'Cargo', ['class' => 'control-label']) }}
                {{ Form::text('sub_text', $sectionsix['sub_text'] ?? old('sub_text'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_twitter', 'link_twitter', ['class' => 'control-label'])}}
                {{ Form::text('link_twitter', $sectionsix['link_twitter'] ?? old('text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_facebook', 'link_facebook', ['class' => 'control-label'])}}
                {{ Form::text('link_facebook', $sectionsix['link_facebook'] ?? old('link_facebook'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_instagram', 'link_instagram', ['class' => 'control-label'])}}
                {{ Form::text('link_instagram', $sectionsix['link_instagram'] ?? old('link_instagram'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_linkedin', 'link_linkedin', ['class' => 'control-label'])}}
                {{ Form::text('link_linkedin', $sectionsix['link_linkedin'] ?? old('link_linkedin'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <label for="image">Imagem</label>
                <input name="image" value="{{ $sectionsix['image'] ?? old('image') }}" type="file" class="form-control"
                       id="image"
                       placeholder="Enter image">
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
