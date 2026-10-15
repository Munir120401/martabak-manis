<?php

use App\Http\Controllers\MartabakController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MartabakController::class, 'beranda'])->name('beranda');
Route::get('/menu', [MartabakController::class, 'index'])->name('menu');
Route::get('/tentang', [MartabakController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [MartabakController::class, 'kontak'])->name('kontak');