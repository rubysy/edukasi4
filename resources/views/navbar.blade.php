<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Media query untuk tampilan di bawah 768px (mobile) */
    @media only screen and (max-width: 768px) {
      body {
        background-color: transparent;
      }

      nav {
        position: absolute; /* Posisi absolut untuk memunculkan overlay */
        top: 0;
        right: -100px; /* Navbar di sisi kanan */
        width: 250px; /* Lebar navbar */
        opacity: 0.9; /* Efek opacity */
        display: none; /* Sembunyikan menu awalnya */
        height: 100vh; /* Menutupi seluruh tinggi layar */
      }

      nav ul {
        flex-direction: column;
        width: 100%;
        transition: transform 0.5s ease, opacity 0.5s ease;
        transform: translateY(-100%); /* Sembunyikan menu secara default */
        opacity: 0; /* Sembunyikan menu secara default */
      }

      nav ul.hidden {
        transform: translateY(-100%);
        opacity: 0;
        display: none;
      }

      nav ul.show {
        transform: translateY(0); /* Tampilkan menu */
        opacity: 1;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Bayangan untuk efek kedalaman */
        background-color: rgba(30, 42, 52, 0.95); /* Tampilkan menu */
        border-radius: 15px;
      }

      .menu-icon {
        display: flex;
        align-items: center;
        cursor: pointer; /* Menambahkan pointer untuk menunjukkan bahwa ini dapat diklik */
        z-index: 1; /* Pastikan ikon di atas menu */
        position: absolute; /* Ubah ini untuk posisi yang lebih bebas */
        top: 10px; /* Menyesuaikan jarak atas */
        right: 20px; /* Menyesuaikan jarak kanan */
      }

      nav ul li {
        list-style: none; /* Menghapus bullet point daftar */
        margin: 20px 0; /* Jarak antar item */
      }

      nav ul li a {
        text-decoration: none; /* Menghapus garis bawah */
        color: white; /* Warna tulisan putih */
        font-size: 18px; /* Ukuran font yang lebih kecil */
        text-align: center; /* Pusatkan teks */
      }

      .responsive-logo {
        max-width: 62px; /* Ukuran maksimum logo untuk tampilan mobile */
        height: auto; /* Menjaga rasio aspek pada tampilan mobile */
        transition: max-width 0.3s ease; /* Transisi halus saat ukuran berubah */
        margin-left: 10px; /* Pindahkan logo sedikit ke kiri */
      }
    }

    /* Media query untuk tampilan di atas 768px (laptop dan desktop) */
    @media only screen and (min-width: 769px) {
      .menu-icon {
        display: none; /* Sembunyikan ikon menu di atas 768px */
      }

      nav {
        position: static; /* Navbar tetap di posisi normal */
        display: flex; /* Menampilkan navbar dalam tampilan horizontal */
        background-color: transparent; /* Navbar tanpa background transparan */
        opacity: 1; /* Pastikan menu terlihat */
      }

      nav ul {
        display: flex;
        opacity: 1; /* Pastikan menu terlihat */
        flex-direction: row; /* Menu ditampilkan secara horizontal */
      }

      nav ul li {
        margin: 0 20px;
      }

      nav ul li a {
        font-size: 16px; /* Ukuran font lebih kecil untuk tampilan desktop */
        color: black;
      }

      .responsive-logo {
        max-width: 62px; /* Ukuran maksimum logo untuk desktop */
        height: auto; /* Tinggi otomatis untuk menjaga rasio aspek */
        margin-left: 0; /* Kembalikan margin ke 0 di desktop */
      }
    }

    header {
      display: flex; /* Menggunakan flexbox untuk penataan */
      align-items: center; /* Menyelaraskan item secara vertikal */
      justify-content: space-between; /* Menyebar item di antara ruang yang tersedia */
      padding: 10px; /* Menambahkan padding untuk header */
    }
  </style>
</head>
<body>
  <header>
    <a href="{{ route('home') }}" class="logo" aria-label="Logo Edukasi4ID" style="display: flex; align-items: center;">
      <img src="{{ asset('logo-edukasi4id.png') }}" alt="Edukasi4ID Logo" class="responsive-logo">
      <span></span>
    </a>
    <div id="menu-icon" class="menu-icon">
      <i class="fas fa-list"></i>
    </div>
    <nav>
      <ul id="menu-list" class="hidden">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a></li>
        <li><a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a></li>
        <li><a href="{{ route('mitra') }}" class="{{ request()->routeIs('mitra') ? 'active' : '' }}">Mitra</a></li>
        <li><a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak Kami</a></li>
      </ul>
    </nav>
    <script>
      document.getElementById('menu-icon').addEventListener('click', function() {
        const menuList = document.getElementById('menu-list');
        menuList.classList.toggle('show'); // Menambahkan toggle untuk kelas show
        menuList.classList.toggle('hidden'); // Menambahkan toggle untuk kelas hidden
        document.querySelector('nav').style.display = 'block'; // Menampilkan navbar pada saat menu diklik
      });

      // Menambahkan event listener untuk setiap tautan
      document.querySelectorAll('nav ul li a').forEach(link => {
        link.addEventListener('click', function() {
          const menuList = document.getElementById('menu-list');
          if (menuList.classList.contains('show')) {
            menuList.classList.remove('show');
            menuList.classList.add('hidden');
          }
        });
      });

      window.onload = function() {
        const menuList = document.getElementById('menu-list');
        menuList.classList.remove('hidden'); // Menghapus kelas hidden
        menuList.classList.add('show'); // Menambahkan kelas show
      };
    </script>
  </header>
</body>
</html>
