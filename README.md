<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

<h1 align="center">🎓 Edukasi4ID</h1>

<p align="center">
  <strong>Platform Edukasi & Pelatihan Digital Terdepan di Indonesia</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="TailwindCSS">
</p>

<p align="center">
  <img src="https://img.shields.io/github/license/yourusername/edukasi4id?style=flat-square" alt="License">
  <img src="https://img.shields.io/github/issues/yourusername/edukasi4id?style=flat-square" alt="Issues">
  <img src="https://img.shields.io/github/forks/yourusername/edukasi4id?style=flat-square" alt="Forks">
  <img src="https://img.shields.io/github/stars/yourusername/edukasi4id?style=flat-square" alt="Stars">
</p>

---

## 📖 Tentang Edukasi4ID

**Edukasi4ID** adalah platform komprehensif yang dirancang untuk memfasilitasi pembelajaran digital dan pengembangan SDM di Indonesia. Platform ini menyediakan berbagai layanan mulai dari pelatihan profesional, konsultasi bisnis, hingga pengembangan aplikasi custom.

### 🎯 Visi & Misi

**Visi**: Menjadi platform edukasi digital terdepan yang memberdayakan individu dan organisasi melalui teknologi pembelajaran inovatif.

**Misi**: 
- Menyediakan pelatihan berkualitas tinggi dengan kurikulum terkini
- Membangun ekosistem pembelajaran yang kolaboratif dan inklusif  
- Mendukung transformasi digital organisasi melalui solusi teknologi terintegrasi

## ✨ Fitur Utama

### 🏢 Profil Perusahaan
- **Landing Page Modern**: Interface responsif dengan desain kontemporer
- **Showcase Portfolio**: Galeri aplikasi dan proyek yang telah diselesaikan
- **Tim Management**: Profil lengkap anggota tim dengan keahlian spesifik

### 📚 Sistem Pelatihan
- **Katalog Pelatihan**: Beragam program pelatihan tersertifikasi
- **Manajemen Peserta**: Sistem pendaftaran dan tracking progress
- **Sertifikasi Digital**: Penerbitan sertifikat elektronik yang terverifikasi

### 🛠️ Showcase Aplikasi
- **Portfolio Interaktif**: Demonstrasi aplikasi dengan tech stack detail
- **Slider Dinamis**: Navigasi smooth dengan auto-advance
- **Status Tracking**: Monitor status pengembangan setiap aplikasi

### 👥 Manajemen Tim
- **Profil Profesional**: CV digital dengan foto dan keahlian
- **Role Management**: Pengelompokan berdasarkan spesialisasi
- **Contact Integration**: Integrasi dengan platform komunikasi

### 📞 Layanan Konsultasi
- **Booking System**: Penjadwalan konsultasi online/offline
- **Multi-layanan**: IT, Bisnis, Digital Marketing, dan lainnya
- **CRM Terintegrasi**: Tracking client dan follow-up otomatis

## 🏗️ Arsitektur Teknologi

### Backend Stack
```
📦 Framework: Laravel 11.x
🐘 Database: MySQL 8.0+
🔐 Authentication: Laravel Sanctum
📧 Mail: Laravel Mail + Queue Jobs
📁 Storage: Laravel Storage (Local/Cloud)
🎨 Admin Panel: Filament 3.x
```

### Frontend Stack  
```
🎨 CSS Framework: TailwindCSS 3.x
⚡ JavaScript: Alpine.js + Vanilla JS
📱 Responsiveness: Mobile-first Design
🖼️ Icons: Heroicons + Lucide React
🎭 Animations: CSS Transitions + Transform
```

### Development Tools
```
📝 Code Quality: PHP CS Fixer + Larastan
🧪 Testing: PHPUnit + Pest
🐳 Containerization: Docker + Docker Compose
🚀 Deployment: GitHub Actions + Laravel Forge
```

## 🚀 Quick Start

### Prerequisites
```bash
PHP >= 8.2
Composer >= 2.5
Node.js >= 18.x
MySQL >= 8.0
```

### Installation

1. **Clone Repository**
```bash
git clone https://github.com/yourusername/edukasi4id.git
cd edukasi4id
```

2. **Install Dependencies**
```bash
composer install
npm install
```

3. **Environment Setup**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Database Configuration**
```bash
# Update .env with your database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=edukasi4id
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run Migrations & Seeders**
```bash
php artisan migrate --seed
php artisan storage:link
```

6. **Build Assets**
```bash
npm run dev
# or for production
npm run build
```

7. **Start Development Server**
```bash
php artisan serve
```

🎉 **Access your application at:** `http://localhost:8000`

## 📱 Screenshots

### Homepage
![Homepage](docs/images/homepage.png)

### Aplikasi Showcase
![Applications](docs/images/aplikasi-showcase.png)

### Admin Dashboard
![Admin Panel](docs/images/admin-dashboard.png)

## 🗂️ Struktur Project

```
edukasi4id/
├── 📁 app/
│   ├── 📁 Filament/         # Admin panel resources
│   ├── 📁 Http/            # Controllers & Middleware
│   ├── 📁 Models/          # Eloquent models
│   └── 📁 Services/        # Business logic services
├── 📁 database/
│   ├── 📁 migrations/      # Database migrations
│   └── 📁 seeders/         # Sample data seeders
├── 📁 public/              # Public assets
├── 📁 resources/
│   ├── 📁 css/            # Stylesheets
│   ├── 📁 js/             # JavaScript files
│   └── 📁 views/          # Blade templates
└── 📁 storage/            # File uploads & cache
```

## 🔧 Configuration

### Admin Panel Access
```
URL: /admin
Default Login:
- Email: admin@edukasi4id.com  
- Password: admin123
```

### File Upload Settings
```php
// config/filesystems.php
'uploads' => [
    'applications' => 'aplikasi-images',
    'team' => 'team-photos', 
    'training' => 'pelatihan-images'
]
```

## 🛡️ Security Features

- **CSRF Protection**: Laravel built-in CSRF protection
- **SQL Injection Prevention**: Eloquent ORM with prepared statements
- **XSS Protection**: Blade template escaping
- **Rate Limiting**: API & form submission rate limiting
- **File Upload Validation**: Strict file type and size validation
- **Admin Authentication**: Secure admin panel access control

## 📊 Performance Optimizations

- **Database Query Optimization**: Eager loading & query caching
- **Image Optimization**: Automatic image compression & WebP conversion
- **Asset Bundling**: Vite.js for optimized JS/CSS bundling
- **CDN Ready**: Configurable asset CDN support
- **Caching Strategy**: Redis/File-based caching implementation

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Generate coverage report
php artisan test --coverage
```

## 🚀 Deployment

### Production Setup
```bash
# Optimize for production
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
```

### Server Requirements
- **PHP**: 8.2+ with required extensions
- **Web Server**: Nginx/Apache with proper rewrites
- **Database**: MySQL 8.0+ or PostgreSQL 13+
- **Storage**: Minimum 2GB free space
- **Memory**: Minimum 512MB RAM

## 🤝 Contributing

Kami sangat menghargai kontribusi dari komunitas! Silakan baca [CONTRIBUTING.md](CONTRIBUTING.md) untuk panduan lengkap.

### Development Workflow
1. Fork repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

## 📞 Support & Contact

### Tim Pengembang
- **Lead Developer**: [Your Name](mailto:developer@edukasi4id.com)
- **UI/UX Designer**: [Designer Name](mailto:design@edukasi4id.com)
- **Project Manager**: [PM Name](mailto:pm@edukasi4id.com)

### Bantuan & Dokumentasi
- 📖 **Documentation**: [docs.edukasi4id.com](https://docs.edukasi4id.com)
- 🐛 **Bug Reports**: [GitHub Issues](https://github.com/yourusername/edukasi4id/issues)
- 💬 **Discussions**: [GitHub Discussions](https://github.com/yourusername/edukasi4id/discussions)
- 📧 **Email**: [support@edukasi4id.com](mailto:support@edukasi4id.com)

## 📜 License

Proyek ini dilisensikan di bawah **MIT License**. Lihat file [LICENSE](LICENSE) untuk detail lengkap.

---

<p align="center">
  <strong>🇮🇩 Dibuat dengan ❤️ di Indonesia</strong>
</p>

<p align="center">
  <sub>© 2024 Edukasi4ID. All rights reserved.</sub>
</p>