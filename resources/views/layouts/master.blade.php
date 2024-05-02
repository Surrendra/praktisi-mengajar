<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ config('app.name') }} | @yield('title')
    </title>
    {{-- bootstrap-5.0.2 --}}
    <link href="{!! asset('vendors/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Program Kelas Kolaborasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{!! route('product_categories.index') !!}">Produk Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('products.index') !!}">
                            Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Paket Member
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{!! asset('vendors/jquery/jquery-3.7.1.min.js') !!}"></script>
    <script src="{!! asset('vendors/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>