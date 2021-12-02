<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <li class="nav-item">
                    <a class="nav-link" href="/admin/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout">Logout</a>
                </li>
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
                <li>
                    <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                </li>


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
@include('sweetalert::alert')
<!-- Navbar -->
</body>
</html>
