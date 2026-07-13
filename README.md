# Givespace Donasi

Aplikasi web donasi sederhana yang dibangun menggunakan Laravel, Tailwind CSS, dan MySQL. Proyek ini menyediakan fitur kampanye donasi, formulir donasi, login admin, dashboard, serta manajemen kampanye.

## Peran Dalam Tim Pengembang

| Peran | Tanggung Jawab Utama | Fokus Skill |
|---|---|---|
| Project Manager | Manajemen jadwal, GitHub Project, integrasi tim, Frontend & Backend Developer. | Komunikasi, Agile |
| Frontend Developer | Implementasi UI dengan Tailwind CSS & Blade. | CSS, UX, Blade |
| Backend Developer | Logika bisnis Laravel, database MySQL, API. | PHP, SQL, Eloquent |

## Standar Teknologi Proyek

- **Framework:** Laravel v12+
- **Frontend:** Tailwind CSS
- **Database:** MySQL / MariaDB
- **Version Control:** Git & GitHub

## Fitur Utama

- Halaman donasi dengan pilihan kampanye aktif
- Formulir pengiriman donasi yang tersimpan di database
- Login admin dan dashboard untuk melihat ringkasan donasi
- CRUD kampanye (buat, edit, hapus)
- Halaman detail kampanye publik

## Persiapan dan Jalankan

1. Copy `.env.example` ke `.env`
2. Sesuaikan koneksi database MySQL di `.env`
3. Install dependensi PHP:

```bash
composer install
```

4. Install dependensi frontend:

```bash
npm install
```

5. Generate aplikasi key dan jalankan migrasi + seeder:

```bash
php artisan key:generate
php artisan migrate --seed
```

6. Jalankan server:

```bash
php artisan serve
npm run dev
```

## Strukur Proyek

- `app/Http/Controllers` - Controller aplikasi
- `app/Models` - Model Eloquent untuk `Campaign` dan `Donation`
- `resources/views` - Blade template UI
- `resources/css/app.css` - konfigurasi Tailwind CSS
- `database/migrations` - file migrasi database

## Catatan Tailwind CSS

Tailwind sudah dikonfigurasi dengan Vite di `vite.config.js`, `tailwind.config.js`, dan `postcss.config.js`. UI menggunakan kelas Tailwind di seluruh Blade template.
