@csrf
<div class="row">
    <div class="col-6">
        <div class="card-body">

            <div class="form-group">
                <label for="logo">Foto</label>
                <input name="logo" value="{{ $navbar->logo ?? old('logo') }}" type="file" class="form-control"
                       id="logo"
                       placeholder="Enter logo">
            </div>
            <div class="form-group">
                {{ Form::label('title_1', 'Titulo 1', ['class' => 'control-label']) }}
                {{ Form::text('title_1', $navbar->title_1 ?? old('title_1'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_2', 'Titulo 2', ['class' => 'control-label'])}}
                {{ Form::text('title_2', $navbar->title_2 ?? old('title_2'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_3', 'Titulo 3', ['class' => 'control-label'])}}
                {{ Form::text('title_3',$navbar->title_3 ?? old('title_3'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_4', 'Titulo 4', ['class' => 'control-label'])}}
                {{ Form::text('title_4',$navbar->title_4 ?? old('title_4'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('title_5', 'Titulo 5', ['class' => 'control-label']) }}
                {{ Form::text('title_5', $navbar->title_5 ?? old('title_5'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_6', 'Titulo 6', ['class' => 'control-label'])}}
                {{ Form::text('title_6', $navbar->title_6 ?? old('title_6'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_7', 'Titulo 7', ['class' => 'control-label'])}}
                {{ Form::text('title_7',$navbar->title_7 ?? old('title_tree'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_8', 'Titulo 8', ['class' => 'control-label'])}}
                {{ Form::text('title_8',$navbar->title_8 ?? old('title_8'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{ Form::label('title_9', 'Titulo 9', ['class' => 'control-label']) }}
                {{ Form::text('title_9', $navbar->title_9 ?? old('title_9'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_10', 'Titulo 10', ['class' => 'control-label'])}}
                {{ Form::text('title_10', $navbar->title_10 ?? old('title_10'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title_11', 'Titulo 11', ['class' => 'control-label'])}}
                {{ Form::text('title_11',$navbar->title_11 ?? old('title_11'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card-body">
            <div class="form-group">
                {{--                {{Form::label('link_title_1', 'Link Título 1', ['class' => 'control-label'])}}--}}
                {{--                {{ Form::text('link_title_1', $navbar->link_title_1 ?? old('link_title_1'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}--}}
                <div class="form-group mb-4">
                    <label class="mr-sm-2" for="languages-select-1">Link Título 1</label>
                    <select name="link_title_1" class="custom-select mr-sm-2" id="languages-select-1">
                        <option value="{{ $navbar->link_title_1 ?? old('link_title_1') }}" selected="">Selecione a
                            Página
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{--                {{Form::label('link_title_2', 'Link Título 2', ['class' => 'control-label'])}}--}}
                {{--                {{ Form::text('link_title_2',$navbar->link_title_2 ?? old('link_title_2'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}--}}
                <div class="form-group mb-4">
                    <label class="mr-sm-2" for="languages-select-2">Link Título 2</label>
                    <select name="link_title_2" class="custom-select mr-sm-2" id="languages-select-1">
                        <option value="{{ $navbar->link_title_2 ?? old('link_title_1') }}" selected="">Selecione a
                            Página
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{--                {{Form::label('link_title_3', 'Link Título 3', ['class' => 'control-label'])}}--}}
                {{--                {{ Form::text('link_title_3',$navbar->link_title_3 ?? old('link_title_3'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}--}}
                <div class="form-group mb-4">
                    <label class="mr-sm-2" for="languages-select-3">Link Título 3</label>
                    <select name="link_title_3" class="custom-select mr-sm-2" id="languages-select-1">
                        <option value="{{ $navbar->link_title_3 ?? old('link_title_1') }}" selected="">Selecione a
                            Página
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{--                {{ Form::label('link_title_4', 'Link Título 4', ['class' => 'control-label']) }}--}}
                {{--                {{ Form::text('link_title_4', $navbar->link_title_4 ?? old('link_title_4'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}--}}
                <div class="form-group mb-4">
                    <label class="mr-sm-2" for="languages-select-4">Link Título 4</label>
                    <select name="link_title_4" class="custom-select mr-sm-2" id="languages-select-1">
                        <option value="{{ $navbar->link_title_4 ?? old('link_title_1') }}" selected="">Selecione a
                            Página
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{--                {{Form::label('link_title_5', 'Link Título 5', ['class' => 'control-label'])}}--}}
                {{--                {{ Form::text('link_title_5', $navbar->link_title_5 ?? old('link_title_5'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}--}}
                <div class="form-group mb-4">
                    <label class="mr-sm-2" for="languages-select-5">Link Título 5</label>
                    <select name="link_title_5" class="custom-select mr-sm-2" id="languages-select-1">
                        <option value="{{ $navbar->link_title_5 ?? old('link_title_1') }}" selected="">Selecione a
                            Página
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{Form::label('link_title_6', 'Link Título 6', ['class' => 'control-label'])}}
                {{ Form::text('link_title_6', $navbar->link_title_6 ?? old('link_title_6'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
                {{--                <div class="form-group mb-4">--}}
                {{--                    <label class="mr-sm-2" for="languages-select-6">Link Título 6</label>--}}
                {{--                    <select name="link_title_6"  class="custom-select mr-sm-2" id="languages-select-1">--}}
                {{--                        <option value="{{ $navbar->link_title_6 ?? old('link_title_1') }}" selected="">Selecione a Página</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
            <div class="form-group">
                {{Form::label('link_title_7', 'Link Título 7', ['class' => 'control-label'])}}
                {{ Form::text('link_title_7',$navbar->link_title_7 ?? old('link_title_7'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
                {{--                <div class="form-group mb-4">--}}
                {{--                    <label class="mr-sm-2" for="languages-select-7">Link Título 7</label>--}}
                {{--                    <select name="link_title_7"  class="custom-select mr-sm-2" id="languages-select-1">--}}
                {{--                        <option value="{{ $navbar->link_title_7 ?? old('link_title_1') }}" selected="">Selecione a Página</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
            <div class="form-group">
                {{Form::label('link_title_8', 'Link Título 8', ['class' => 'control-label'])}}
                {{ Form::text('link_title_8',$navbar->link_title_8 ?? old('link_title_8'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
                {{--                <div class="form-group mb-4">--}}
                {{--                    <label class="mr-sm-2" for="languages-select-8">Link Título 8</label>--}}
                {{--                    <select name="link_title_8"  class="custom-select mr-sm-2" id="languages-select-1">--}}
                {{--                        <option value="{{ $navbar->link_title_8 ?? old('link_title_1') }}" selected="">Selecione a Página</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
            <div class="form-group">
                {{ Form::label('link_title_9', 'Link Título 9', ['class' => 'control-label']) }}
                {{ Form::text('link_title_9', $navbar->link_title_9 ?? old('link_title_9'), ['placeholder' => 'Informe o título','class'=>'form-control'])}}
                {{--                <div class="form-group mb-4">--}}
                {{--                    <label class="mr-sm-2" for="languages-select-9">Link Título 9</label>--}}
                {{--                    <select name="link_title_9"  class="custom-select mr-sm-2" id="languages-select-1">--}}
                {{--                        <option value="{{ $navbar->link_title_9 ?? old('link_title_1') }}" selected="">Selecione a Página</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
            <div class="form-group">
                {{Form::label('link_title_10', 'Link Título 10', ['class' => 'control-label'])}}
                {{ Form::text('link_title_10', $navbar->link_title_10 ?? old('link_title_10'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
                {{--                <div class="form-group mb-4">--}}
                {{--                    <label class="mr-sm-2" for="languages-select-10">Link Título 10</label>--}}
                {{--                    <select name="link_title_10"  class="custom-select mr-sm-2" id="languages-select-1">--}}
                {{--                        <option value="{{ $navbar->link_title_10 ?? old('link_title_1') }}" selected="">Selecione a Página</option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
            <div class="form-group">
                {{Form::label('link_title_11', 'Link Título 11', ['class' => 'control-label'])}}
                {{ Form::text('link_title_11',$navbar->link_title_11 ?? old('link_title_11'), ['placeholder' => 'Informe o título', 'class'=>'form-control'])}}
                {{--                <div class="form-group mb-4">--}}
                {{--                    <label class="mr-sm-2" for="languages-select-11">Link Título 11</label>--}}
                {{--                    <select name="link_title_11" class="custom-select mr-sm-2" id="languages-select-1">--}}
                {{--                        <option value="{{ $navbar->link_title_11 ?? old('link_title_1') }}" selected="">Selecione a--}}
                {{--                            Página--}}
                {{--                        </option>--}}
                {{--                    </select>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    {{ Form::submit('Enviar', ['class' => 'btn btn-primary']) }}
</div>
