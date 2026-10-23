# UTS Rekayasa Web - Rental Mobil (Laravel)

Folder ini berisi file-file yang perlu DITIMPA/DITAMBAHKAN ke proyek Laravel baru.

## Langkah
1. Buat proyek: `composer create-project laravel/laravel UTS_NIM`
2. Salin semua isi folder ini ke dalam proyek (gabungkan/timpa `routes/web.php` dan `database/seeders/DatabaseSeeder.php`).
3. Download Bootstrap (compiled CSS & JS), lalu letakkan:
   - `public/Bootstrap/css/bootstrap.min.css`
   - `public/Bootstrap/js/bootstrap.bundle.min.js`
4. Buat database MySQL `db_uts_nim` (ganti `nim` dengan NIM kamu), lalu edit `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_uts_nim
   DB_USERNAME=root
   DB_PASSWORD=
   ```
5. Jalankan: `php artisan migrate --seed`
6. Jalankan: `php artisan serve` lalu buka http://127.0.0.1:8000
