# 🎓 Edukasi4ID

**Platform Konsultan Pendidikan dan Pelatihan Pengembangan Diri & Organisasi**

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Filament](https://img.shields.io/badge/Filament-3.x-FDBA12?style=for-the-badge&logo=filament&logoColor=black)](https://filamentphp.com)

---

## 📖 Tentang Edukasi4ID

Edukasi4ID adalah Perusahaan Konsultan pendidikan dan layanan pelatihan/Layanan Pendidikan non formal yang fokus di bidang vokasi dan kejuruan untuk memenuhi kebutuhan industri, khususnya bidang Teknologi Informasi dan Komunikasi.

**Didirikan**: Jakarta, 11 November 2020

### 🎯 Visi & Misi

**Visi**: Menjadi Lembaga Konsultan Pendidikan dan Pelatihan Pengembangan Diri dan Organisasi yang Profesional di Indonesia.

**Misi**:
- Melayani kebutuhan peningkatan kompetensi Pendidikan, Profesi dan masyarakat di Bidang Teknologi Informasi Komunikasi serta pengembangan SDM
- Melaksanakan seminar dan pelatihan di bidang TIK, SDM, Character Building dan Capacity Building
- Menjamin kepuasan pelanggan dalam melayani jasa pelatihan Pendidikan dan Update Teknologi
- Melakukan kerjasama dengan Lembaga terkait, Perguruan Tinggi, Instansi Pemerintah atau Swasta

## 🌟 Ruang Lingkup Layanan

### 🔧 Workshop IT
Program IT meliputi Office Specialist, Networking, Programming (web/app), Desain, dan 2D/3D animasi.

### 💼 Praktek Kerja Industri (Prakerin)
Praktek Kerja Industri bagi Siswa-siswi SMK di perusahaan/industri yang bekerja sama dengan Edukasi4ID.

### 🏭 Kelas Industri
Pengadaan laboratorium/bengkel serta alat-alat praktek sesuai standar industri untuk meningkatkan kompetensi.

### 🏆 Sertifikasi Industri dan Internasional
Uji Kompetensi berbasis industri dan internasional (Adobe, Microsoft, ITS, LO, RedHat, dll).

### 👨‍🏫 Magang Guru IT
Program pelatihan kerja untuk meningkatkan kompetensi guru dan mengikuti trend teknologi di industri.

### 💼 Penyaluran Tenaga Kerja
Penempatan kesempatan kerja yang luas dan relevan untuk lulusan SMK.

### 🏫 Konsultasi Pengembangan Sekolah
Konsultasi untuk pengembangan institusi pendidikan.

### 📜 Sertifikasi LSP P3
Penyelenggaraan sertifikasi Informatika Signal Teknindo (lspsignal.id) yang diakui industri IT.

## 🏗️ Arsitektur Teknologi

### Backend
- **Framework**: Laravel 11.x
- **Database**: MySQL 8.0+
- **Admin Panel**: Filament 3.x
- **Storage**: Laravel Storage (Public Disk)
- **Authentication**: Laravel built-in Auth

### Frontend
- **CSS**: TailwindCSS + Custom CSS (Home page)
- **JavaScript**: Vanilla JS dengan Touch/Swipe support
- **Icons**: Font Awesome 6.4.0 + Heroicons
- **Responsive**: Mobile-first approach

### Fitur Admin Panel
- **Hero Images Management**: Upload & urutan gambar slideshow homepage
- **Kolaborasi Management**: Manajemen logo perusahaan & akademisi
- **Pelatihan Management**: Program pelatihan dengan gambar
- **Konsultan Management**: Kegiatan konsultan pendidikan
- **LMS Content**: Narasi text + multiple images
- **Aplikasi Portfolio**: Showcase aplikasi dengan tech stack icons
- **Profil Images**: Image cards untuk halaman profil
- **Mitra Management**: Logo dan deskripsi mitra

## 🚀 Installation

### Prerequisites
```bash
PHP >= 8.2
Composer >= 2.5
Node.js >= 18.x
MySQL >= 8.0
```

### Setup
```bash
# Clone repository
git clone <repository-url>
cd edukasi4id

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate
php artisan storage:link

# Build assets
npm run dev
# or for production: npm run build

# Start server
php artisan serve
```

## 🗂️ Struktur Database

### Tables
- `hero_images` - Slideshow homepage dengan order & active status
- `kolaborasis` - Logo perusahaan & akademisi (kategori enum)
- `pelatihans` - Program pelatihan dengan image
- `konsultans` - Kegiatan konsultan pendidikan
- `lms` - Content LMS (type: text/image dengan validasi single text)
- `aplikasis` - Portfolio aplikasi dengan tech_stacks JSON & status
- `profil_images` - Images untuk profil cards (position 1/2)
- `mitras` - Mitra dengan logo & deskripsi

### Key Features
- **JSON Storage**: Tech stacks di aplikasi menggunakan JSON field
- **File Management**: Semua upload menggunakan Laravel Storage
- **Order System**: Hero images, LMS, aplikasi support ordering
- **Status Management**: Active/inactive flags untuk content visibility
- **Position System**: Profil images menggunakan position untuk card placement

## 📱 Halaman Website

### Public Pages
- **Homepage** (`/`) - Hero slideshow + ruang lingkup + kolaborasi + maps
- **Profil** (`/profil`) - Tentang perusahaan + visi misi + image cards
- **Layanan** (`/layanan`) - Overview layanan dengan carousel
- **Mitra** (`/mitra`) - Grid mitra dengan logo & deskripsi
- **Kontak** (`/kontak`) - Form kontak + info perusahaan
- **LMS** (`/lms`) - Learning Management System content

### Sub-Layanan
- **Pelatihan** (`/pelatihan`) - Horizontal scroll carousel
- **Konsultan** (`/konsultan`) - Kegiatan konsultan carousel
- **Aplikasi** (`/aplikasi`) - Portfolio slider dengan tech stack
- **Platform Pendidikan** (`/platform_pendidikan`) - Static content

## ⚙️ Admin Panel

Access: `/admin`

### Content Management Groups
- **Home Management**: Hero Images, Kolaborasi
- **Profil Management**: Profil Images
- **Layanan Management**: Pelatihan, Konsultan, LMS, Aplikasi
- **Mitra Management**: Mitra

### Features
- **File Upload**: Image preview + validation
- **Order Management**: Drag & drop reordering
- **Status Control**: Active/inactive toggles
- **Tech Stack Icons**: Automatic icon fetching dengan fallback
- **Responsive Tables**: Mobile-friendly admin interface

## 🔧 Configuration

### File Upload Directories
```
storage/app/public/
├── hero-images/           # Homepage slideshow
├── kolaborasi-logos/      # Logo kolaborasi
├── pelatihan-images/      # Gambar pelatihan
├── konsultan/            # Gambar konsultan
├── lms-images/           # LMS images
├── aplikasi-images/      # Portfolio aplikasi
├── profil-images/        # Profil cards
└── logos/                # Logo mitra
```

### Tech Stack Icons
Aplikasi menggunakan multiple CDN untuk tech stack icons:
- Primary: jsdelivr.net/gh/devicons/devicon
- Fallback: jsdelivr.net/npm/simple-icons
- Error handling: Colored circle dengan initial

## 🎨 Styling Notes

- **Homepage**: Mixed TailwindCSS + inline CSS (1600+ lines)
- **Other Pages**: Konsisten menggunakan TailwindCSS
- **Responsive**: Mobile-first dengan custom breakpoints
- **Animations**: CSS transitions + JavaScript untuk interaktivity

## 📞 Contact Information

- **Address**: Komplek Ruko Plaza Indah Bogor B-2 Jl. KH. Sholeh Iskandar - Kedungbadak, Kota Bogor
- **Email**: edukasi4.id@gmail.com
- **Phone**: 0858-8556-4596 (Verra)
- **Website**: [Instagram](https://instagram.com/edukasi4id) | [YouTube](https://www.youtube.com/@edukasi4indonesia880)

---

**© 2025 Edukasi4ID. All rights reserved.**
