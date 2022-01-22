@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
                {{ Form::text('title', $collectionsimages['title'] ?? old('title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('sub_title', 'Sub Title', ['class' => 'control-label']) }}
                {{ Form::text('sub_title', $collectionsimages['sub_title'] ?? old('sub_title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text', 'Url', ['class' => 'control-label'])}}
                {{ Form::text('text', $collectionsimages['text'] ?? old('text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <label for="photo">Foto</label>
                <input name="photo" value="{{ $collectionsimages['photo'] ?? old('photo') }}" type="file" class="form-control"
                       id="photo"
                       placeholder="Enter image">
            </div>

        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
