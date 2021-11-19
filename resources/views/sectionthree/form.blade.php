@csrf
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('title', 'Título', ['class' => 'control-label'])}}
                {{ Form::text('title', $sectionThree->title ?? old('title'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('color_icon', 'Cor Ìcone', ['class' => 'control-label']) }}
                {{ Form::color('color_icon', $sectionThree->color_icon ?? old('color_icon'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text', 'Texto', ['class' => 'control-label'])}}
                {{ Form::text('text', $sectionThree->text ?? old('text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_two', 'Título 2', ['class' => 'control-label'])}}
                {{ Form::text('title_two',$sectionThree->title_two ?? old('title_two'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text_two', 'Texto 2', ['class' => 'control-label'])}}
                {{ Form::text('text_two',$sectionThree->text_two ?? old('text_two'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon', 'Ícone', ['class' => 'control-label'])}}
                {{ Form::text('icon',$sectionThree->icon ?? old('icon'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('sub_title', 'Subtítulo', ['class' => 'control-label'])}}
                {{ Form::text('sub_title', $sectionThree->sub_title ?? old('sub_title'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('sub_text', 'Subtexto', ['class' => 'control-label'])}}
                {{ Form::text('sub_text', $sectionThree->sub_text ?? old('sub_text'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text_three', 'Texto 3', ['class' => 'control-label'])}}
                {{ Form::text('text_three', $sectionThree->text_three ?? old('text_three'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <label for="photo">Foto</label>
                <input name="photo" value="{{ $sectionThree->photo ?? old('photo') }}" type="file" class="form-control"
                       id="photo"
                       placeholder="Enter photo">
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
