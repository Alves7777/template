<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Alves Imported</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Ashopping_cart%3A"
          rel="stylesheet">
    <link href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Ashopping_bag%3A" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css"
          integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css"
          integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>


    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizLand - v3.3.0
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<main>
    <div class="">
        <div class="row">
        @include('site.navbar')

{{--            {{dd(Auth::guard('ecommerce'))}}--}}

{{--            @if(Auth::guard('ecommerce')->user())--}}
{{--                <div class="col-12">--}}
{{--                    <p class="text-right">Seja bem vindo, {{ Auth::guard('ecommerce')->user()->name }}</p>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            @if($message = Session::get('error'))--}}
{{--                <div class="col-12">--}}
{{--                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if($message = Session::get('success'))--}}
{{--                <div class="col-12">--}}
{{--                    <div class="alert alert-success">{{ $message }}</div>--}}
{{--                </div>--}}
{{--            @endif--}}
        </div>
    </div>

    @yield('content')
</main>
{{--@include('sweetalert::alert')--}}
<!-- Vendor JS Files -->
<script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('/assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/assets/js/main.js') }}"></script>

</body>
</html>

