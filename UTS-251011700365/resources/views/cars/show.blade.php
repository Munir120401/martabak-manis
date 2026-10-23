@extends('layouts.app')

@section('title', $car->brand . ' ' . $car->model)

@section('content')
@include('layouts._identitas')

<div class="container my-5">
    <div class="card car-card col-lg-8 mx-auto">
        <img src="{{ asset('assets/images/' . $car->image) }}" class="card-img-top" alt="{{ $car->brand }} {{ $car->model }}">
        <div class="card-body p-4">
            <h2 class="h3 mb-1">{{ $car->brand }} {{ $car->model }}</h2>
            <div class="price fs-4 mb-3">Rp {{ number_format($car->rent_price, 0, ',', '.') }} <small>/ hari</small></div>

            <table class="table table-bordered mb-4">
                <tbody>
                    <tr><th scope="row" style="width:35%">Merek</th><td>{{ $car->brand }}</td></tr>
                    <tr><th scope="row">Model</th><td>{{ $car->model }}</td></tr>
                    <tr><th scope="row">Tahun</th><td>{{ $car->year }}</td></tr>
                    <tr><th scope="row">Transmisi</th><td>{{ $car->transmission }}</td></tr>
                    <tr><th scope="row">Harga sewa</th><td>Rp {{ number_format($car->rent_price, 0, ',', '.') }} / hari</td></tr>
                </tbody>
            </table>

            <a href="{{ route('cars.index') }}" class="btn btn-kuning">Kembali ke daftar</a>
        </div>
    </div>
</div>
@endsection