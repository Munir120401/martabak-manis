<?php

namespace Database\Seeders;

use App\Models\Martabak;
use Illuminate\Database\Seeder;

class MartabakSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['Coklat Keju', 'Klasik', 'Perpaduan coklat meses dan keju parut yang gurih manis.', 'Coklat, Keju', 'Ukuran 24 cm', 35000, 'images/martabak/coklat-keju.jpg'],
            ['Coklat Kacang', 'Klasik', 'Coklat meses dengan taburan kacang tanah sangrai.', 'Coklat, Kacang', 'Ukuran 24 cm', 33000, 'images/martabak/coklat-kacang.jpg'],
            ['Keju Susu', 'Klasik', 'Keju melimpah dengan siraman susu kental manis.', 'Keju, Susu', 'Ukuran 24 cm', 36000, 'images/martabak/keju-susu.jpg'],
            ['Green Tea', 'Spesial', 'Adonan hijau aroma matcha dengan topping keju.', 'Green Tea, Keju', 'Ukuran 24 cm', 42000, 'images/martabak/green-tea.jpg'],
            ['Red Velvet', 'Spesial', 'Adonan merah lembut dengan cream cheese.', 'Cream Cheese, Coklat', 'Ukuran 24 cm', 45000, 'images/martabak/red-velvet.jpg'],
            ['Oreo Keju', 'Spesial', 'Remahan Oreo renyah dengan keju dan susu.', 'Oreo, Keju', 'Ukuran 24 cm', 43000, 'images/martabak/oreo-keju.jpg'],
            ['Nutella Banana', 'Premium', 'Olesan Nutella dengan irisan pisang segar.', 'Nutella, Pisang', 'Ukuran 24 cm', 55000, 'images/martabak/nutella-banana.jpg'],
            ['Pisang Coklat', 'Klasik', 'Pisang manis dipadu coklat meses leleh.', 'Pisang, Coklat', 'Ukuran 24 cm', 38000, 'images/martabak/pisang-coklat.jpg'],
            ['Tiramisu', 'Premium', 'Rasa kopi tiramisu dengan taburan bubuk coklat.', 'Tiramisu, Coklat', 'Ukuran 24 cm', 50000, 'images/martabak/tiramisu.jpg'],
            ['Ketan Hitam', 'Premium', 'Ketan hitam legit dengan susu dan keju.', 'Ketan Hitam, Susu, Keju', 'Ukuran 24 cm', 40000, 'images/martabak/ketan-hitam.jpg'],
        ];

        foreach ($data as [$nama, $kategori, $deskripsi, $topping, $ukuran, $harga, $gambar]) {
            Martabak::create(compact('nama', 'kategori', 'deskripsi', 'topping', 'ukuran', 'harga', 'gambar'));
        }
    }
}