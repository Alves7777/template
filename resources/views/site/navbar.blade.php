<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    @foreach($navbar as $navbars)
        <div class="container d-flex align-items-center justify-content-between">
        {{--        <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>--}}
        <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="">
                <img src="{{ asset("/storage/$navbars->logo") }}"
                     alt="#"
                     style="width: 162px; height: 75px">
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{$navbars->title_1}}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{$navbars->title_2}}</a></li>
                    <li><a class="nav-link scrollto" href="#services">{{$navbars->title_3}}</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">{{$navbars->title_4}}</a></li>
                    <li><a class="nav-link scrollto" href="#team">{{$navbars->title_5}}</a></li>
                    <li class="dropdown"><a href="#"><span>{{$navbars->title_6}}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">{{$navbars->title_7}}</a></li>
                            <li><a href="#">{{$navbars->title_8}}</a></li>
                            <li><a href="#">{{$navbars->title_9}}</a></li>
                            <li><a href="#">{{$navbars->title_10}}</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">{{$navbars->title_11}}</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                @endforeach
            </nav><!-- .navbar -->

        </div>
</header><!-- End Header -->

