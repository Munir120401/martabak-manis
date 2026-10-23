<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            ['brand' => 'Toyota',     'model' => 'Avanza',   'year' => 2022, 'rent_price' => 350000,  'image' => 'car1.svg', 'transmission' => 'Manual'],
            ['brand' => 'Honda',      'model' => 'Brio RS',  'year' => 2023, 'rent_price' => 300000,  'image' => 'car2.svg', 'transmission' => 'Automatic'],
            ['brand' => 'Toyota',     'model' => 'Innova Zenix', 'year' => 2024, 'rent_price' => 750000, 'image' => 'car3.svg', 'transmission' => 'Automatic'],
            ['brand' => 'Mitsubishi', 'model' => 'Xpander',  'year' => 2023, 'rent_price' => 450000,  'image' => 'car4.svg', 'transmission' => 'Automatic'],
            ['brand' => 'Suzuki',     'model' => 'Ertiga',   'year' => 2021, 'rent_price' => 330000,  'image' => 'car5.svg', 'transmission' => 'Manual'],
            ['brand' => 'Daihatsu',   'model' => 'Ayla',     'year' => 2022, 'rent_price' => 250000,  'image' => 'car6.svg', 'transmission' => 'Manual'],
            ['brand' => 'Honda',      'model' => 'HR-V',     'year' => 2024, 'rent_price' => 650000,  'image' => 'car7.svg', 'transmission' => 'Automatic'],
            ['brand' => 'Toyota',     'model' => 'Fortuner', 'year' => 2023, 'rent_price' => 1100000, 'image' => 'car8.svg', 'transmission' => 'Automatic'],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
