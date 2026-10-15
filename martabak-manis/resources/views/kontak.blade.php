@extends('layouts.app')
@section('title', 'Kontak')

@section('content')
<div class="container mt-5">
    <h1 class="fw-bold">Kontak Kami</h1>
    <ul class="list-unstyled mt-3">
        <li>📍 Alamat: Jl. Contoh No. 123, Depok</li>
        <li>📞 WhatsApp: 0812-3456-7890</li>
        <li>⏰ Buka: Setiap hari, 16.00 – 23.00 WIB</li>
    </ul>
    <a href="https://wa.me/6281234567890" class="btn btn-success" target="_blank">Pesan via WhatsApp</a>
</div>
@endsection