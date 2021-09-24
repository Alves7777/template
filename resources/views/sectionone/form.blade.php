@csrf
<div class="row">
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('title', '', ['class' => 'control-label'])}}
                {{ Form::text('title',$sectionone->title ?? old('title'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('color_title', 'Cor do título', ['class' => 'control-label']) }}
                {{ Form::color('color_title', $sectionone->color_title ?? old('color_title'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Descrição', ['class' => 'control-label'])}}
                {{ Form::text('description', $sectionone->description ?? old('description'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('text_button', 'Texto botão', ['class' => 'control-label'])}}
                {{ Form::text('text_button',$sectionone->text_button ?? old('text_button'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('color_button', 'Cor Botão', ['class' => 'control-label'])}}
                {{ Form::color('color_button',$sectionone->color_button ?? old('color_button'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('url_button', 'Url botão', ['class' => 'control-label'])}}
                {{ Form::text('url_button', $sectionone->url_button ?? old('url_button'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('text_video', 'Texto vídeo', ['class' => 'control-label'])}}
                {{ Form::text('text_video', $sectionone->text_video ?? old('text_video'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('url_video', 'Url Vídeo', ['class' => 'control-label'])}}
                {{ Form::text('url_video',$sectionone->url_video ?? old('url_video'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_video', 'icon_video', ['class' => 'control-label'])}}
                {{ Form::text('icon_video',$sectionone->icon_video ?? old('icon_video'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('color_icon_video', 'color_icon_video', ['class' => 'control-label']) }}
                {{ Form::color('color_icon_video', $sectionone->color_icon_video ?? old('color_icon_video'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('color_text_video', 'color_text_video', ['class' => 'control-label']) }}
                {{ Form::color('color_text_video', $sectionone->color_text_video ?? old('color_text_video'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('image', 'image', ['class' => 'control-label']) }}
                {{ Form::file('image', $sectionone->image ?? old('image'), ['accept'=>'image/*','placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
