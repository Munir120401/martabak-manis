<?php

namespace App\Http\Controllers;

use App\Models\Martabak;

class MartabakController extends Controller
{
    public function beranda()
    {
        $unggulan = Martabak::latest()->take(3)->get();
        return view('beranda', compact('unggulan'));
    }

    public function index()
    {
        $martabaks = Martabak::all();
        return view('martabak.index', compact('martabaks'));
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }
}