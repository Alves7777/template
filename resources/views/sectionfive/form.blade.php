@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
                {{ Form::text('title', $sectionfive['title'] ?? old('title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('color_title', 'Cor Title', ['class' => 'control-label']) }}
                {{ Form::color('color_title', $sectionfive['color_title'] ?? old('color_title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text', 'Texto', ['class' => 'control-label'])}}
                {{ Form::text('text', $sectionfive['text'] ?? old('text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('url', 'Url', ['class' => 'control-label'])}}
                {{ Form::text('url', $sectionfive['url'] ?? old('url'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <label for="image">Imagem</label>
                <input name="image" value="{{ $sectionfive['image'] ?? old(['image']) }}" type="file" class="form-control"
                       id="image"
                       placeholder="Enter image">
            </div>
            <div class="form-group">
                <label for="background">Background</label>
                <input name="background" value="{{ $sectionfive['background'] ?? old(['background']) }}" type="file" class="form-control"
                       id="background"
                       placeholder="Enter image">
            </div>
            <div class="form-group">
                {{Form::label('text_one', 'Texto 1', ['class' => 'control-label'])}}
                {{ Form::text('text_one', $sectionfive['text_one'] ?? old('text_one'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
