<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Martabak extends Model
{
    protected $fillable = [
        'nama', 'kategori', 'deskripsi', 'topping', 'ukuran', 'harga', 'gambar',
    ];
}