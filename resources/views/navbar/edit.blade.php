@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <div class="card-tools" style="display: flex; justify-content: flex-end; align-items: center; ">
                        <div>
                            <a href="{{route('navbar.index')}}" class="btn btn-navbar" type="submit"
                               style="margin-right: 0px;">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <h5>
                        <i class="fas fa-th-list"></i>
                        Editar Funcionário
                    </h5>
                </div>
{{--                @include('layouts.alerts')--}}
                <div class="card-body">
                    <form action="{{route('navbar.update', $navbar->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        @include('navbar.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const languagesSelect_1 = document.getElementById("languages-select-1");
        const languagesList_1 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_1.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_1.options[languagesSelect_1.options.length] = option;
        });

        const languagesSelect_2 = document.getElementById("languages-select-2");
        const languagesList_2 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_2.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_2.options[languagesSelect_2.options.length] = option;
        });

        const languagesSelect_3 = document.getElementById("languages-select-3");
        const languagesList_3 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_3.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_3.options[languagesSelect_3.options.length] = option;
        });

        const languagesSelect_4 = document.getElementById("languages-select-4");
        const languagesList_4 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_4.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_4.options[languagesSelect_4.options.length] = option;
        });

        const languagesSelect_5 = document.getElementById("languages-select-5");
        const languagesList_5 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_5.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_5.options[languagesSelect_5.options.length] = option;
        });


        const languagesSelect_6 = document.getElementById("languages-select-6");
        const languagesList_6 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_6.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_6.options[languagesSelect_6.options.length] = option;
        });

        const languagesSelect_7 = document.getElementById("languages-select-7");
        const languagesList_7 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_7.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_7.options[languagesSelect_7.options.length] = option;
        });

        const languagesSelect_8 = document.getElementById("languages-select-8");
        const languagesList_8 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_8.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_8.options[languagesSelect_8.options.length] = option;
        });

        const languagesSelect_9 = document.getElementById("languages-select-9");
        const languagesList_9 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_9.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_9.options[languagesSelect_9.options.length] = option;
        });

        const languagesSelect_10 = document.getElementById("languages-select-10");
        const languagesList_10 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_10.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_10.options[languagesSelect_10.options.length] = option;
        });

        const languagesSelect_11 = document.getElementById("languages-select-11");
        const languagesList_11 = ["page_1", "page_2", "page_3", "page_4", "page_5", "page_6", "page_7", "page_8", "page_9", "page_10", "page_11"];
        languagesList_11.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect_11.options[languagesSelect_11.options.length] = option;
        });
    </script>
@stop

@section('css')
@stop

@section('js')
    <script src="{{asset('js/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/navbar/navbar.js')}}"></script>
@stop


