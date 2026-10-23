@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h1 class="display-4">Sewa mobil harian, tanpa ribet.</h1>
                <p class="lead mt-3 mb-4">Pilih mobil, cek harga per hari, lalu berangkat. Tersedia city car sampai SUV, manual maupun matic.</p>
                <a href="{{ route('cars.index') }}" class="btn btn-kuning btn-lg">Lihat Semua Mobil</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/car3.svg') }}" class="img-fluid rounded" alt="Mobil rental unggulan">
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="h4 mb-0">Armada terbaru</h2>
        <a href="{{ route('cars.index') }}">Semua mobil</a>
    </div>
    <div class="row g-4">
        @foreach ($cars as $car)
            @include('cars._card', ['car' => $car])
        @endforeach
    </div>
</section>
@endsection
