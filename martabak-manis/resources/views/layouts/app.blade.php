<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Martabak Manis') | Martabak Manis</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <style>
        :root { --brand: #c0392b; --cream: #fff8ee; }
        body { background: var(--cream); }
        .navbar { background: var(--brand); }
        .navbar .nav-link, .navbar-brand { color: #fff !important; }
        .navbar .nav-link.active { font-weight: 700; border-bottom: 2px solid #fff; }
        .hero { background: linear-gradient(135deg, #c0392b, #e67e22); color: #fff; padding: 90px 0; }
        .card-produk { border: 0; border-radius: 16px; overflow: hidden; transition: transform .2s; }
        .card-produk:hover { transform: translateY(-6px); box-shadow: 0 10px 25px rgba(0,0,0,.15); }
        .card-produk img { height: 220px; object-fit: cover; }
        .harga { color: var(--brand); font-weight: 700; font-size: 1.2rem; }
        footer { background: #2c1810; color: #ddd; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">🥞 Martabak Manis</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menu Martabak</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="py-4 mt-5 text-center">
    <div class="container">&copy; {{ date('Y') }} Martabak Manis. Semua hak dilindungi.</div>
</footer>

<script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>