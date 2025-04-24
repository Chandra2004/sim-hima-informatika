# Kiwkiw - MVC Native PHP Framework

## 📌 Pengenalan

**Kiwkiw** adalah framework PHP berbasis MVC (Model-View-Controller) yang dibuat oleh **Chandra Tri A**. Framework ini dirancang untuk mempermudah pengelolaan proyek PHP dengan arsitektur yang lebih terstruktur dan mendukung fitur seperti migrasi database dan seeder ala Laravel.

## 🚀 Cara Instalasi

### 1️⃣ Clone Proyek

```sh
  git clone https://github.com/Chandra2004/Kiwkiw-Native.git
  cd Kiwkiw-Native
```

### 2️⃣ Inisialisasi Composer

```sh
  composer init
```

📌 **Catatan**: Pastikan untuk tidak meletakkan file di `src/`, tetapi ubah ke `app/`.

### 3️⃣ Konfigurasi Token GitHub (Opsional, jika menggunakan repositori privat)

1. Buka **GitHub** dan masuk ke **Settings**
2. Pilih **Developer settings** > **Personal access tokens** > **Tokens (classic)**
3. Klik **Generate new token** (beri akses ke Composer, misalnya repo)
4. Copy token tersebut
5. Jalankan perintah berikut di terminal:
   ```sh
   composer config --global github-oauth.github.com [TOKEN_GITHUB]
   ```

### 4️⃣ Install Dependensi dengan Composer

```sh
  composer require vlucas/phpdotenv   # Untuk konfigurasi .env
  composer require fakerphp/faker    # Untuk seeder
  composer require illuminate/view illuminate/events illuminate/filesystem    #untuk blade templating
```

### 5️⃣ Konfigurasi `composer.json`

Tambahkan pengaturan berikut ke dalam file `composer.json`:

```json
{
    "name": "namaprojek/anda",
    "autoload": {
        "psr-4": {
            "Database\\": "database/",
            "Database\\Migrations\\": "database/migrations/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "files": [
        "app/App/Config.php"
    ],
    "require": {
        "php": ">=8"
    },
    "scripts": {
      "post-autoload-dump": [
          "{{NAMESPACE}}\\App\\Router::cacheRoutes"
      ],
      "post-install-cmd": [
          "php update-namespace.php"
      ],
      "post-update-cmd": [
          "php update-namespace.php"
      ]
    }
}
```

📌 **Setelah mencopy `composer.json` tersebut, jalankan perintah:**

```sh
  composer dump-autoload
```

### 6️⃣ Update Namespace Setelah Instalasi

Jalankan update namespace agar autoload berjalan:

```sh
  php update-namespace.php
```

Atau akses melalui browser: `http://localhost/kiwkiw-native/update-namespace.php`

---

## 📂 Struktur Direktori

```
Kiwkiw-Native/
├── app/
│   ├── App/
│   │   ├── Config.php
│   │   ├── Database.php
│   │   ├── Router.php
│   │   └── View.php
│   ├── Controller/
│   │   ├── ErrorController.php
│   │   └── HomeController.php
│   ├── Database/
│   │   └── Migration.php
│   ├── Middleware/
│   │   ├── Middleware.php
│   │   └── AuthMiddleware.php
│   ├── Models/
│   │   └── HomeModel.php
│   ├── Storage/
│   │   └── cache/
│   │       ├── views/
│   │       └── routes.cache
│   ├── View/
│   │   ├── error/
│   │   │   ├── error404.php
│   │   │   └── error500.php
│   │   └── interface/
│   │       ├── detail.php
│   │       ├── home.php
│   │       └── user.php
├── database/
│   ├── migrations/
│   │   └── CreateUsersTable.php
│   └── seeders/
│       └── UserSeeder.php
├── public/
│   ├── _htaccess
│   └── index.php
├── vendor/
├── .env
├── gitignore
├── artisan
├── artisan.bat
├── composer.json
├── composer.lock
├── README.md
└── update-namespace.php
```

---

## 🔥 Cara Menggunakan Migration dan Seeder

### 🔹 **Migration** (Migrasi Database)

#### 📌 Membuat File Migrasi

Buat file migrasi baru di `database/migrations/` (contoh: `CreateUsersTable.php`).

#### 📌 Menjalankan Migrasi

```sh
  php artisan migrate                    # Jalankan semua migrasi
  php artisan migrate --class=NamaClass  # Jalankan migrasi spesifik
  php artisan migrate:fresh              # Hapus semua tabel, buat ulang, lalu jalankan seeder
  php artisan migrate:refresh            # Hapus dan buat ulang tabel tanpa menjalankan seeder
  php artisan migrate:refresh --class=NamaClass  # Jalankan ulang migrasi tertentu
```

### 🔹 **Seeder** (Mengisi Database dengan Data Dummy)

#### 📌 Membuat File Seeder

Buat file seeder baru di `database/seeders/` (contoh: `UserSeeder.php`).

#### 📌 Menjalankan Seeder

```sh
  php artisan seed                     # Jalankan semua seeder
  php artisan seed --class=NamaClass   # Jalankan seeder spesifik
```

---

## 🌍 Konfigurasi **BASE\_URL** di `.env`

Tambahkan BASE\_URL di file `.env` sesuai dengan file path dari `public/`:

```env
BASE_URL=http://localhost/Kiwkiw-Native/public
```

---

## 🔎 Melihat Database Setelah Penginstalan

Jika Anda ingin melihat bagaimana database bekerja setelah penginstalan Kiwkiw Native, jalankan perintah berikut di terminal:

```sh
  php artisan migrate:fresh
```

Setelah itu, buka URL `/user` di browser Anda. Untuk melihat lebih detail dari data user, klik pada user yang ingin dituju.

---

## ✨ Kontribusi

Jika ingin berkontribusi, silakan buat pull request atau hubungi saya!

📞 **Kontak**:

- **WhatsApp**: 085730676143
- **Email**: [chandratriantomo123@gmail.com](mailto\:chandratriantomo123@gmail.com)
- **Website**: [Kiwkiw-Native](https://www.kiwkiw-native.free.nf)

---

Terima kasih telah menggunakan **Kiwkiw-Native**! 🚀
