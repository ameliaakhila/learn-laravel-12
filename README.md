# Learn Laravel 12

Website edukasi sederhana menggunakan **Laravel 12**, menampilkan artikel/blog, halaman About, Contact, dan fitur kategori. Website ini dibangun menggunakan **Tailwind CSS** untuk desain modern dan responsif.

---

## 📌 Fitur Utama
- Halaman **Home**, **Blogs**, **About**, dan **Contact**
- Sistem **Blog dengan kategori**: Beginner, Intermediate, Advance
- Menampilkan **author**, **tanggal publikasi**, dan **list point** pada setiap blog
- Navbar responsif dengan dropdown profil
- Footer dengan info kontak dan link sosial media
- Seeder dan Factory untuk generate data dummy secara otomatis
- Mendukung **Tailwind CSS** utility dan Blade Components

---

## 🛠 Persyaratan
- PHP >= 8.3
- Composer
- Node.js & npm
- Database: MySQL, PostgreSQL, SQLite, dsb.

---

## ⚡ Instalasi & Setup

1. **Clone repository**
```bash
git clone <repository-url>
cd <project-folder>
````

2. **Install dependencies**

```bash
composer install
npm install
npm run dev
```

3. **Copy file environment**

```bash
cp .env.example .env
```

4. **Sesuaikan konfigurasi database di `.env`**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

5. **Generate application key**

```bash
php artisan key:generate
```

6. **Jalankan migrasi dan seeder**

```bash
php artisan migrate --seed
```

> Seeder akan membuat user dan blog dummy otomatis

7. **Jalankan server**

```bash
php artisan serve
```

Website berjalan di `http://127.0.0.1:8000`

8. **Compile assets (jika ada perubahan Tailwind/JS)**

```bash
npm run dev
```

Untuk mode production:

```bash
npm run build
```

---

## 📁 Struktur Folder Penting

* `app/Models/Blogs.php` → Model Blog
* `database/migrations/xxxx_create_blogs_table.php` → Migration tabel blogs
* `database/seeders/BlogSeeder.php` → Seeder user & blog
* `database/factories/BlogsFactory.php` → Factory generate blog dummy
* `resources/views/components/` → Layout, navbar, header, footer, dll.
* `resources/css/app.css` → Tailwind CSS
* `resources/js/app.js` → JS project
* `routes/web.php` → Route website

## 💻 Cara Menggunakan

1. Kunjungi halaman **Home** untuk melihat ringkasan blog.
2. Klik **Blog** untuk melihat semua artikel.
3. Klik kategori untuk filter blog sesuai kategori.
4. Klik blog untuk membaca detail beserta daftar poin (`list`) yang dibuat.
5. Gunakan navbar untuk navigasi antar halaman.
6. Footer menyediakan kontak dan link sosial media.


## ✨ Catatan

* Blog memiliki field `list` bertipe JSON, bisa menampilkan beberapa poin penting di setiap artikel.
* Navbar dan Footer dibuat **reusable** menggunakan Blade Components.
* Tailwind CSS digunakan untuk tampilan modern, responsif, dan mudah dikustomisasi.


## 📧 Kontak & Sosial Media

* Email: [ameliaakhila29@gmail.com](mailto:ameliaakhila29@gmail.com)
* LinkedIn: [Amelia Akhila](https://www.linkedin.com/in/amelia-akhila-05339622a)
* GitHub: [Link GitHub](https://github.com/ameliaakhila)
