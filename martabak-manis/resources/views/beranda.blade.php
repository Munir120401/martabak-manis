@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Martabak Manis Hangat & Lumer</h1>
        <p class="lead">Dibuat fresh setiap hari dengan bahan pilihan.</p>
        <a href="{{ route('menu') }}" class="btn btn-light btn-lg mt-3">Lihat Menu</a>
    </div>
</section>

<section class="container mt-5">
    <h2 class="text-center fw-bold mb-4">Menu Terbaru</h2>
    <div class="row g-4">
        @foreach ($unggulan as $martabak)
            @include('martabak._card')
        @endforeach
    </div>
</section>
@endsection