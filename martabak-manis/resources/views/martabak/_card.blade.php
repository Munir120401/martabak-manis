<div class="col-md-6 col-lg-4">
    <div class="card card-produk h-100 shadow-sm">
        <img src="{{ asset($martabak->gambar) }}" class="card-img-top" alt="{{ $martabak->nama }}"
             onerror="this.onerror=null;this.src='{{ asset('images/martabak/default.jpg') }}';">
        <div class="card-body d-flex flex-column">
            <span class="badge bg-warning text-dark align-self-start mb-2">{{ $martabak->kategori }}</span>
            <h5 class="card-title fw-bold">{{ $martabak->nama }}</h5>
            <p class="card-text text-muted small">{{ $martabak->deskripsi }}</p>
            <ul class="list-unstyled small mb-3">
                <li><strong>Topping:</strong> {{ $martabak->topping }}</li>
                <li><strong>Ukuran:</strong> {{ $martabak->ukuran }}</li>
            </ul>
            <div class="harga mt-auto">Rp {{ number_format($martabak->harga, 0, ',', '.') }}</div>
        </div>
    </div>
</div>