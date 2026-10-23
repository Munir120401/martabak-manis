<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Rental Mobil') | JalanTerus Rental</title>
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        :root { --aspal: #1f2328; --kuning: #f2b705; --kertas: #f6f4ef; }
        body { background: var(--kertas); color: var(--aspal); font-family: "Segoe UI", system-ui, sans-serif; }
        .navbar-rental { background: var(--aspal); border-bottom: 4px solid var(--kuning); }
        .navbar-rental .navbar-brand { font-weight: 800; letter-spacing: .5px; }
        .navbar-rental .navbar-brand span { color: var(--kuning); }
        .navbar-rental .nav-link.active, .navbar-rental .nav-link:hover { color: var(--kuning); }
        .btn-kuning { background: var(--kuning); color: var(--aspal); font-weight: 700; border: 0; }
        .btn-kuning:hover { background: #d9a304; color: var(--aspal); }
        .hero { background: var(--aspal); color: #fff; padding: 4.5rem 0; }
        .hero h1 { font-weight: 800; line-height: 1.1; }
        .car-card { border: 0; border-radius: .5rem; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.12); }
        .car-card img { aspect-ratio: 16/10; object-fit: cover; background: #e9e6df; }
        .price { font-weight: 800; font-size: 1.15rem; }
        .price small { font-weight: 400; color: #6c757d; }
        footer { background: var(--aspal); color: #b9bec5; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-rental">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Jalan<span>Terus</span> Rental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('cars.*') ? 'active' : '' }}" href="{{ route('cars.index') }}">Daftar Mobil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-4 mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between small">
            <span>&copy; {{ date('Y') }} JalanTerus Rental. UTS Rekayasa Web - Universitas Pamulang.</span>
            <span>Harga sewa per hari, belum termasuk BBM dan sopir.</span>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
