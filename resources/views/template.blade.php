<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #5e838f">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">SHASFYA'Sling Bag</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>