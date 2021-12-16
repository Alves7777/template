@foreach($topbar as $topbars)
    <style>
        #topbar {
            background-color: {{ $topbars->color_top_bar }};
        }
    </style>

    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="{{ $topbars->icon_email }} d-flex align-items-center"><a
                        target="_blank" href="{{ $topbars->link_email }}">{{ $topbars->email }}</a></i>
                <i class="p-2 {{ $topbars->icon_phone }} d-flex align-items-center"><a
                        target="_blank" href="https://web.whatsapp.com/send?phone=55{{ $topbars->phone }}&text=Olá, entrei no site, gostaria de algumas informações.">{{ $topbars->phone }}</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ $topbars->link_icon_1 }}" class="twitter"><i class="{{ $topbars->icon_1 }}"></i></a>
                <a href="{{ $topbars->link_icon_2 }}" class="facebook"><i class="{{ $topbars->icon_2 }}"></i></a>
                <a href="{{ $topbars->link_icon_3 }}" class="instagram"><i class="{{ $topbars->icon_3 }}"></i></a>
                <a href="{{ $topbars->link_icon_4 }}" class="linkedin"><i class="{{ $topbars->icon_4 }}"></i></a>
            </div>
        </div>
        @endforeach
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        @foreach($navbar as $navbars)
            <div class="container d-flex align-items-center justify-content-between">
            {{--        <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
                <a href="/" class="">
                    <img src="{{ asset("/storage/$navbars->logo") }}"
                         alt="#"
                         style="width: 162px; height: 70px">
                </a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active"
                               href="{{ $navbars->link_title_1 }}">{{$navbars->title_1}}</a></li>
                        <li><a class="nav-link scrollto" href="{{ $navbars->link_title_2 }}">{{$navbars->title_2}}</a>
                        </li>
                        <li><a class="nav-link scrollto" href="{{ $navbars->link_title_3 }}">{{$navbars->title_3}}</a>
                        </li>
                        <li><a class="nav-link scrollto " href="{{ $navbars->link_title_4 }}">{{$navbars->title_4}}</a>
                        </li>
                        <li><a class="nav-link scrollto" href="{{ $navbars->link_title_5 }}">{{$navbars->title_5}}</a>
                        </li>
                        <li class="dropdown"><a href="{{ $navbars->link_title_6 }}"><span>{{$navbars->title_6}}</span>
                                <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ $navbars->link_title_7 }}">{{$navbars->title_7}}</a></li>
                                <li><a href="{{ $navbars->link_title_8 }}">{{$navbars->title_8}}</a></li>
                                <li><a href="{{ $navbars->link_title_9 }}">{{$navbars->title_9}}</a></li>
                                <li><a href="{{ $navbars->link_title_10 }}">{{$navbars->title_10}}</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="{{ route($navbars->link_title_11) }}"><i class="{{$navbars->title_11}}"></i></a>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                    @endforeach
                </nav><!-- .navbar -->

            </div>
    </header>
    <script src="{{asset('js/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script><!-- End Header -->
    <script>
        // fetch('')
        let test = document.getElementById(
            "phone"
        ).href = `https://api.whatsapp.com/send?phone=55${phone}&text=Olá, entrei no site da gostaria de algumas informações.`;

        $('#cpf').mask('000.000.000-00');
    </script>


