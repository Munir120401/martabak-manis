@extends('layouts.app')
@section('title', 'Menu Martabak')

@section('content')
<div class="container mt-5">
    <h1 class="fw-bold text-center">Menu Martabak</h1>
    <p class="text-center text-muted mb-5">Pilih varian favoritmu. Total {{ $martabaks->count() }} varian tersedia.</p>
    <div class="row g-4">
        @forelse ($martabaks as $martabak)
            @include('martabak._card')
        @empty
            <p class="text-center">Belum ada data.</p>
        @endforelse
    </div>
</div>
@endsection