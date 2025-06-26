# Website Konsultasi Kesehatan 🩺

Halo! Selamat datang README ini akan memandu kalian langkah demi langkah untuk menyiapkan proyek ini di komputer lokal kalian (Windows).

## 📋 Website Konsultasi Kesehatan

Proyek Laravel sederhana untuk **manajemen konsultasi kesehatan secara online**

## ✨ Fitur
- 🔐 Autentikasi (Login/Register)
- 👨‍⚕️ Role-based (Admin & User)
- 🗓️ CRUD Konsultasi
- 📄 Layout Blade Template
- ⚙️ Eloquent ORM, Migration, Seeder
- 👨‍💻 3 Kontributor, 2 Commit berbeda

## 🙍‍♂️ Role

1. **Admin**
   - Login
   - Melihat semua data konsultasi
   - Menambahkan, mengedit, menghapus data
   - Mengelola user

2. **User**
   - Login dan Registrasi 
   - Melakukan konsultasi 
   - Melihat semua data konsultasi 

---

## 🛠️ Teknologi

- PHP
- Composer
- Laravel 9
- Laravel Breeze (untuk autentikasi)
- Layout Blade Template
- Eloquent ORM, Migration, Seeders
- MySQL / MariaDB (database)
- XAMPP / Laragon (server lokal)

---

## ⚙️ Instalasi

```bash
# 1. Clone repository
git clone https://github.com/username/konsultasi-dokter-laravel.git
cd [NAMA_FOLDER_PROYEK]

# 2. Install dependencies
composer install
npm install
npm run dev

# 3. Copy .env
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Setting koneksi database di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

# 6. Jalankan migration dan seeder
php artisan migrate --seed

# 7. Jalankan server lokal
php artisan serve
```

## 🔑 Akun Pengguna Awal

Setelah menjalankan seeder, kalian akan memiliki akun pengguna berikut yang tersedia untuk login:

| Email | Password | Role |
| :------------------ | :--------- | :---------- |
| `admin@gmail.com` | `admin@gmail.com` | `admin` |
| `admin2@gmail.com` | `admin2@gmail.com` | `admin` |
| `haider@gmail.com` | `haider@gmail.com` | `user` |
| `misbah@gmail.com` | `misbah@gmail.com` | `user` |

**Catatan:** Mohon isi email dan password aktual yang digunakan di seeder kalian di sini! Ini sangat membantu agar semua orang tahu kredensial login default.

## 🤝 Berkontribusi
Proyek ini dikerjakan oleh 3 kontributor dengan minimal 2 commit berbeda:

### 👥 Daftar Kontributor:
- [@Deboyy12](https://github.com/Deboyy12) 
- [@haiiideeer](https://github.com/haiiideeer) 
- [@user3](https://github.com/user3) 

### ✅ Commit:

1. **[Commit Pertama]**: Integrasi role-based access dan implementasi layout, eloquent ORM, seeders, authentication 
2. **[Commit Kedua]**: Desain tampilan 

## 📄 Lisensi

Proyek ini adalah "open-source" dan dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
