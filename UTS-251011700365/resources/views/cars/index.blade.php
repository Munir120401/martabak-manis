@extends('layouts.app')

@section('title', 'Daftar Mobil')

@section('content')
@include('layouts._identitas')
<div class="container mt-5">
<div class="container mt-5">
    <h1 class="h3 mb-1">Daftar Mobil</h1>
    <p class="text-muted mb-4">{{ $cars->count() }} mobil tersedia untuk disewa.</p>

    <div class="row g-4">
        @forelse ($cars as $car)
            @include('cars._card', ['car' => $car])
        @empty
            <div class="col-12">
                <div class="alert alert-warning">Belum ada data mobil. Jalankan <code>php artisan migrate --seed</code>.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
