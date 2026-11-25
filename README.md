# 🎓 Personal Portfolio — RevoU Fundamental Course

Website portfolio pribadi yang dikembangkan sebagai bagian dari **RevoU Fundamental Course**.

Project ini dibuat untuk menerapkan materi pembelajaran web development ke dalam sebuah website portfolio sederhana menggunakan **Laravel, PHP, Blade, CSS, HTML, dan JavaScript**.

Repository ini juga menjadi dokumentasi salah satu project pembelajaran selama mengikuti RevoU Fundamental Course.

---

## 📌 Project Overview

Project ini merupakan website portfolio pribadi yang menampilkan informasi mengenai profil, pengalaman, serta halaman kontak.

Pengembangan project berfokus pada penerapan fundamental web development menggunakan Laravel, termasuk penggunaan routing, Blade template, struktur project Laravel, serta pengelolaan asset dan halaman website.

---

## ✨ Features

### 🏠 Home

Halaman utama portfolio yang menampilkan:

- Banner atau visual utama.
- Greeting kepada pengunjung.
- Informasi pengantar mengenai portfolio.

### 👤 About

Halaman About yang berisi informasi mengenai:

- Biodata.
- Profil pribadi.
- Pengalaman.

### 📩 Contact

Halaman Contact yang menyediakan form untuk mengirimkan pesan kepada pemilik portfolio.

### 🧭 Navigation

Website memiliki navigasi untuk berpindah antar halaman portfolio dengan struktur yang sederhana dan mudah digunakan.

### 📱 Responsive Design

Tampilan website dirancang agar dapat digunakan pada berbagai ukuran layar.

---

## 🛠️ Tech Stack

Teknologi utama yang digunakan dalam project:

| Technology | Purpose |
|---|---|
| **PHP** | Programming language |
| **Laravel** | Web application framework |
| **Blade** | Template engine |
| **HTML5** | Struktur halaman |
| **CSS3** | Styling dan layout |
| **JavaScript** | Interaksi pada halaman |
| **Composer** | PHP dependency management |
| **Vite** | Asset bundling dan development tooling |

> Teknologi dan dependency mengikuti konfigurasi yang tersedia pada repository project.

---

## 📂 Project Structure

Project menggunakan struktur standar Laravel:

```text
16-jun-25-galhkoernia/
│
├── app/
│   └── Application logic
│
├── bootstrap/
│   └── Application bootstrap
│
├── config/
│   └── Application configuration
│
├── database/
│   └── Database migrations and related files
│
├── public/
│   └── Public assets and application entry point
│
├── resources/
│   └── views/
│       └── Blade templates
│
├── routes/
│   └── web.php
│
├── storage/
│   └── Application generated files
│
├── tests/
│   └── Application tests
│
├── .env.example
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── vite.config.js
├── phpunit.xml
└── README.md
```

---

## ⚙️ Requirements

Sebelum menjalankan project, pastikan environment sudah memiliki:

- PHP sesuai dengan requirement pada `composer.json`
- Composer
- Node.js dan npm
- Database server jika dibutuhkan oleh konfigurasi aplikasi

Untuk melihat requirement PHP dan dependency Laravel secara pasti, lihat file:

```text
composer.json
```

---

## 🚀 Installation

### 1. Clone Repository

```bash
git clone https://github.com/galhkoernia/16-jun-25-galhkoernia.git
```

Masuk ke directory project:

```bash
cd 16-jun-25-galhkoernia
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Setup Environment

Salin `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Kemudian sesuaikan konfigurasi environment sesuai kebutuhan project.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Setup Database

Jika project membutuhkan database, konfigurasi database pada file `.env`, kemudian jalankan:

```bash
php artisan migrate
```

### 6. Install Frontend Dependencies

```bash
npm install
```

### 7. Build Frontend Assets

Untuk development:

```bash
npm run dev
```

Untuk production build:

```bash
npm run build
```

### 8. Run Laravel Development Server

```bash
php artisan serve
```

Website kemudian dapat diakses melalui:

```text
http://127.0.0.1:8000
```

---

## 🔄 Development Workflow

Project dikembangkan menggunakan Git sebagai version control.

Workflow dasar yang digunakan:

```text
Development
     │
     ▼
Feature / Changes
     │
     ▼
Testing
     │
     ▼
Commit
     │
     ▼
Push to GitHub
```

Repository juga dibuat melalui **GitHub Classroom** sebagai bagian dari proses pembelajaran RevoU.

---

## 📚 Learning Objectives

Melalui project ini, beberapa konsep yang dipelajari dan diterapkan antara lain:

- Fundamental web development.
- Struktur aplikasi Laravel.
- PHP dalam pengembangan web.
- Laravel routing.
- Blade templating.
- Pengelolaan halaman website.
- HTML dan CSS.
- JavaScript dasar.
- Pengelolaan asset menggunakan Vite.
- Dependency management menggunakan Composer dan npm.
- Version control menggunakan Git.
- Repository management menggunakan GitHub.

---

## 🎯 Project Status

**Status: Completed**

Project ini merupakan project pembelajaran dari **RevoU Fundamental Course**.

Project disimpan sebagai dokumentasi hasil belajar dan bagian dari portfolio pengembangan kemampuan web development.

---

## 🔮 Future Improvements

Project ini masih dapat dikembangkan lebih lanjut, misalnya:

- Memperbaiki UI/UX.
- Menambahkan animasi dan micro-interactions.
- Mengembangkan form Contact menjadi sistem pengiriman pesan yang sebenarnya.
- Menambahkan database untuk menyimpan pesan.
- Menambahkan halaman project/portfolio secara dinamis.
- Menambahkan authentication untuk pengelolaan portfolio.
- Melakukan deployment ke production environment.

Fitur-fitur tersebut merupakan pengembangan lanjutan dan **belum menjadi bagian dari implementasi project awal**.

---

## 👨‍💻 Developer

**Galuh Kurnia**

Email: `galuhkoernia979@gmail.com`

GitHub: [@galhkoernia](https://github.com/galhkoernia)

LinkedIn: [linkedin.com/in/galuh-kurnia-a25b9b325](https://www.linkedin.com/in/galuh-kurnia-a25b9b325)

---

## 📅 Project Information

| Information | Detail |
|---|---|
| **Project** | Personal Portfolio |
| **Course** | RevoU Fundamental Course |
| **Repository** | `16-jun-25-galhkoernia` |
| **Platform** | GitHub Classroom |
| **Primary Language** | PHP / Blade |
| **Status** | Completed |

---

## 📝 Note

Project ini dibuat sebagai bagian dari proses pembelajaran **RevoU Fundamental Course**.

Repository dipertahankan sebagai dokumentasi perjalanan belajar dan implementasi fundamental web development menggunakan Laravel.

---

⭐ **Thank you for visiting this repository!**
