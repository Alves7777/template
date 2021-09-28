@csrf
<div class="row">
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{Form::label('icon_email', 'Ícone e-mail', ['class' => 'control-label'])}}
                {{ Form::text('icon_email',$topbar->icon_email ?? old('icon_email'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
                {{ Form::text('email', $topbar->email ?? old('email'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_phone', 'Ícone phone', ['class' => 'control-label'])}}
                {{ Form::text('icon_phone', $topbar->icon_phone ?? old('icon_phone'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('phone', 'Fone', ['class' => 'control-label'])}}
                {{ Form::text('phone',$topbar->phone ?? old('phone'), ['placeholder' => '', 'class'=>'form-control', 'id'=> 'phone'])}}
            </div>
            <div class="form-group">
                {{Form::label('color_top_bar', 'Cor Topbar', ['class' => 'control-label'])}}
                {{ Form::color('color_top_bar',$topbar->color_top_bar ?? old('color_top_bar'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_1', 'icon_1', ['class' => 'control-label'])}}
                {{ Form::text('icon_1', $topbar->icon_1 ?? old('icon_1'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_2', 'icon_2', ['class' => 'control-label'])}}
                {{ Form::text('icon_2',$topbar->icon_2 ?? old('icon_2'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('icon_3', 'icon_3', ['class' => 'control-label'])}}
                {{ Form::text('icon_3',$topbar->icon_3 ?? old('icon_3'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('icon_4', 'icon_4', ['class' => 'control-label']) }}
                {{ Form::text('icon_4', $topbar->icon_4 ?? old('icon_4'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_phone', 'link_phone', ['class' => 'control-label'])}}
                {{ Form::text('link_phone', $topbar->link_phone ?? old('link_phone'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_email', 'link_email', ['class' => 'control-label'])}}
                {{ Form::text('link_email',$topbar->link_email ?? old('link_email'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('link_icon_1', 'link_icon_1', ['class' => 'control-label'])}}
                {{ Form::text('link_icon_1',$topbar->link_icon_1 ?? old('link_icon_1'), ['placeholder' => '', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('link_icon_2', 'link_icon_2', ['class' => 'control-label']) }}
                {{ Form::text('link_icon_2', $topbar->link_icon_2 ?? old('icon_4'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('link_icon_3', 'link_icon_3', ['class' => 'control-label']) }}
                {{ Form::text('link_icon_3', $topbar->link_icon_3 ?? old('icon_4'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('link_icon_4', 'link_icon_4', ['class' => 'control-label']) }}
                {{ Form::text('link_icon_4', $topbar->link_icon_4 ?? old('link_icon_4'), ['placeholder' => '','class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
<script src="{{asset('js/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script>
    $('#phone').mask('(99) 99999-9999');
    $('#zipcode').mask('99.999-99');
</script>
