<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>Admin Dashboard</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                E-COMMERCE
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/admin-register">Registrar Usuário</a>
                </li>

                @if(!Auth::guard('admin')->user())
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/login">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/purchase/history">Minhas Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/logout">Logout</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a type="submit" class="btn btn-primary btn-sm" href="/cart">Sacola</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>

            <!-- Notifications -->
            {{--            <a--}}
            {{--                class="text-reset me-3 dropdown-toggle hidden-arrow"--}}
            {{--                href="#"--}}
            {{--                id="navbarDropdownMenuLink"--}}
            {{--                role="button"--}}
            {{--                data-mdb-toggle="dropdown"--}}
            {{--                aria-expanded="false"--}}
            {{--            >--}}

            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
            >

                <a href="/admin/logout">Logout</a>

            </ul>

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>

<main class="py-4">
    <nav class="container navbar navbar-light bg-light">
        @if(Auth::guard('admin')->user())
            <div class="col-12">
                <p class="text-right">Seja bem vindo, {{ Auth::guard('admin')->user()->name }}</p>
            </div>
        @endif
    </nav>
    @yield('content')
</main>
{{--@include('sweetalert::alert')--}}
<!-- Navbar -->
</body>
</html>

<script src="{{ asset('js/app.js') }}"></script>
@yield('script')

{{--@section('script.js')--}}
{{--    <script>console.log('olá')</script>--}}
{{--@endsection--}}
