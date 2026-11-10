# Modern Wood

Website toko furnitur kayu sederhana yang dibuat dengan Laravel (pola MVC dan Blade templating) untuk UTS Pemrograman Web 2026. Tidak memakai database, semua data produk dikirim dari controller berupa array.

- Nama: Fatimah Azzahro
- NIM: 252410102015
- Program Studi:Teknologi Informasi

## Fitur

Modern Wood dirancang untuk memberikan tampilan sederhana dalam mengelola informasi koleksi furnitur. Admin dapat masuk melalui halaman login, melihat koleksi produk pada Dashboard, memeriksa daftar produk dan status stok pada halaman Pengelolaan, serta melihat informasi akun melalui halaman Profil. Setiap halaman dibuat dengan tampilan yang menyesuaikan ukuran layar, sehingga website tetap nyaman digunakan melalui laptop maupun perangkat mobile.

## Teknologi

- Laravel (PHP)
- Blade (`@extends`, `@section`, `@yield`, `@include`, dan `<x-footer />`)
- Tailwind CSS (CDN), CSS dan JavaScript biasa

## Struktur Utama

- `routes/web.php` untuk daftar route
- `app/Http/Controllers/PageController.php` untuk logika dan data
- `resources/views/layouts/app.blade.php` untuk layout utama
- `resources/views/` untuk view login, dashboard, pengelolaan, dan profile
- `resources/views/components/` untuk navbar dan footer

## Screenshot

### Login
![Login](screenshots/login.png)

### Dashboard

Tampilan awal:
![Dashboard 1](screenshots/dashboard_1.png)

Koleksi produk:
![Dashboard 2](screenshots/dashboard_2.png)

### Pengelolaan
![Pengelolaan](screenshots/pengelolaan.png)

### Profil
![Profil](screenshots/profil.png)

## Cara Menjalankan

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```
Lalu buka http://localhost:8000
