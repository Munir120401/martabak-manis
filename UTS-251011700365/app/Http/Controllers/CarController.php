<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    // Beranda: hero + 4 mobil terbaru
    public function home()
    {
        $cars = Car::orderByDesc('year')->take(4)->get();
        return view('cars.home', compact('cars'));
    }

    // Halaman daftar mobil
    public function index()
    {
        $cars = Car::orderBy('brand')->get();
        return view('cars.index', compact('cars'));
    }

    // Halaman detail mobil
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }
}
