<div class="col-12 col-sm-6 col-lg-3">
    <div class="card car-card h-100">
        <img src="{{ asset('assets/images/' . $car->image) }}" class="card-img-top" alt="{{ $car->brand }} {{ $car->model }}">
        <div class="card-body d-flex flex-column">
            <div class="text-muted small">{{ $car->brand }} &middot; {{ $car->year }}</div>
            <h5 class="card-title mb-2">{{ $car->model }}</h5>
            <span class="badge text-bg-secondary align-self-start mb-3">{{ $car->transmission }}</span>
            <div class="price mt-auto mb-3">Rp {{ number_format($car->rent_price, 0, ',', '.') }} <small>/ hari</small></div>
            <a href="{{ route('cars.show', $car) }}" class="btn btn-kuning w-100">Lihat Detail</a>
        </div>
    </div>
</div>
