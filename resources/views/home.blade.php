<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edukasi4ID</title>
  <style>
    /* Reset and base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #000;
      line-height: 1.5;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
  
    main.container {
      flex: 1;
      padding-bottom: 0 !important; /* pastikan tidak ada padding bawah */
    }

    footer {
      margin-top: 0 !important;
    }
    
    a {
      text-decoration: none;
      color: inherit;
    }

    /* Container for page */
    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px 60px;
    }

    /* Header & Navigation */
    header {
      background-color: #fff;
      border-bottom: 1px solid #ddd;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* Logo */
    .logo {
      display: flex;
      align-items: center;
      font-weight: 700;
      font-size: 2rem;
      color: #69cae8;
      letter-spacing: -0.04em;
    }

    .logo svg {
      width: 40px;
      height: 40px;
      margin-right: 6px;
      fill: #69cae8;
    }

    /* Nav Menu */
    nav {
      display: flex;
      align-items: center;
      gap: 24px;
      font-weight: 600;
      font-size: 1rem;
    }

    nav a {
      color: #000;
      position: relative;
      padding: 8px 14px;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    nav a.active,
    nav a:hover {
      background-color: #69cae8;
      color: #fff;
      font-weight: 700;
      box-shadow: 0 4px 10px rgb(105 202 232 / 0.3);
    }

    /* Hero Section */
    .hero {
      background-color: #000;
      padding: 70px 40px 70px 40px;
      color: #fff;
      margin-top: 20px;
      border-radius: 0 0 8px 8px;
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 16px;
      line-height: 1.3;
    }

    .hero p {
      font-weight: 600;
      font-size: 1rem;
      max-width: 520px;
    }

    /* About Section - Content Side by Side */
    .about-section {
      margin-top: 40px;
      display: flex;
      justify-content: space-between;
      gap: 40px;
      align-items: center;
      flex-wrap: wrap;
    }

    /* Logo black box placeholder */
    .about-logo {
      flex: 1 1 280px;
      background-color: #000;
      border-radius: 12px;
      height: 230px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 6px 15px rgb(0 0 0 / 0.4);
      margin-left: -140px;
    }

    /* About Text */
    .about-text {
      flex: 1 1 450px;
    }

    .about-text h2 {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: -5px;
      margin-top: -15px;
      margin-left: -12px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.18);
    }

    .about-text h2 span {
      color: #69cae8;
    }

    .about-text p {
      font-weight: 600;
      font-size: 0.9rem;
      max-width: 480px;
      line-height: 1.4;
      letter-spacing: 0.02em;
      margin-left: -9px;
    }

    /* Section Titles */
    h3.section-title {
      margin-top: 60px;
      font-size: 1.8rem;
      font-weight: 900;
      color: #000;
      letter-spacing: 0.04em;
      text-align: center;
      text-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Responsive */
    @media (max-width: 750px) {
      header {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }
      nav {
        gap: 14px;
        font-size: 0.9rem;
      }

      .hero {
        padding: 40px 24px;
      }

      .about-section {
        flex-direction: column;
        gap: 30px;
      }

      .about-logo,
      .about-text {
        flex-basis: 100%;
        max-width: 560px;
        margin: 0 auto;
      }

      .about-logo {
        height: 160px;
        font-size: 1.3rem;
      }

      .hero h1 {
        font-size: 1.8rem;
      }
    }

    /* Glass Card Section */
.glass-card-section {
  margin-top: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 400px;
  padding: 40px 20px;
}
.glass-card {
  position: relative;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  border-radius: 20px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  padding: 40px;
  max-width: 900px;
  width: 100%;
  overflow: hidden;
}
.glass-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: linear-gradient(135deg, 
    rgba(105, 202, 232, 0.1) 0%, 
    rgba(255, 255, 255, 0.05) 25%, 
    rgba(105, 202, 232, 0.08) 50%, 
    rgba(255, 255, 255, 0.03) 75%, 
    rgba(105, 202, 232, 0.06) 100%);
  border-radius: 20px;
  z-index: 1;
}
.glass-card::after {
  content: '';
  position: absolute;
  top: -2px; left: -2px; right: -2px; bottom: -2px;
  background: linear-gradient(45deg, 
    transparent, 
    rgba(255, 255, 255, 0.1), 
    transparent, 
    rgba(255, 255, 255, 0.05), 
    transparent);
  border-radius: 22px;
  z-index: 0;
}
.glass-card-content {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: start;
}
.glass-card-column {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.glass-card-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 15px;
  background: rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
}
.glass-card-item:hover {
  background: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  border-color: rgba(105, 202, 232, 0.3);
}
.glass-card-icon {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: linear-gradient(135deg, #69cae8, #357ABD);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 12px;
  font-weight: bold;
  flex-shrink: 0;
  margin-top: 2px;
  box-shadow: 0 4px 12px rgba(105, 202, 232, 0.3);
}
.glass-card-text {
  color: #333;
  font-size: 0.95rem;
  font-weight: 600;
  line-height: 1.4;
  text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
}
.glass-card-particle {
  position: absolute;
  width: 4px;
  height: 4px;
  background: rgba(105, 202, 232, 0.6);
  border-radius: 50%;
  animation: float 6s ease-in-out infinite;
}
.glass-card-particle:nth-child(1) { top: 20%; left: 20%; animation-delay: 0s; }
.glass-card-particle:nth-child(2) { top: 60%; left: 80%; animation-delay: 2s; }
.glass-card-particle:nth-child(3) { top: 80%; left: 30%; animation-delay: 4s; }
@keyframes float {
  0%, 100% { transform: translateY(0px) scale(1); opacity: 0.7; }
  50% { transform: translateY(-10px) scale(1.1); opacity: 1; }
}
@media (max-width: 768px) {
  .glass-card {
    padding: 30px 20px;
    margin: 0 10px;
  }
  .glass-card-content {
    grid-template-columns: 1fr;
    gap: 25px;
  }
  .glass-card-item {
    padding: 12px;
  }
  .glass-card-text {
    font-size: 0.9rem;
  }
}

    /* --- Carousel Styles --- */
    .ruanglingkup-carousel-wrapper {
      margin-top: 60px;
      margin-bottom: 40px;
    }
    .ruanglingkup-carousel-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 50px;
      text-align: center;
    }
    .carousel-container {
      position: relative;
      width: 100%;
      max-width: 1200px;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      perspective: 1000px;
      overflow: hidden;
      margin: 0 auto;
    }
    .carousel-track {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.5s ease;
    }
    .card {
      position: absolute;
      width: 250px;
      height: 300px;
      border-radius: 15px;
      background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%);
      cursor: pointer;
      transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      box-shadow: 0 8px 25px rgba(74, 144, 226, 0.3);
      overflow: hidden;
      transform-style: preserve-3d;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
      text-align: center;
      padding: 20px;
    }
    .card::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, rgba(255,255,255,0.1), transparent, rgba(255,255,255,0.1));
      border-radius: 15px;
      z-index: 1;
    }
    .card-content {
      position: relative;
      z-index: 2;
      text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
    .card.active {
      transform: translateX(0) translateZ(0) rotateY(0deg) scale(1);
      z-index: 10;
      box-shadow: 0 15px 35px rgba(74, 144, 226, 0.4);
    }
    .card.prev {
      transform: translateX(-200px) translateZ(-100px) rotateY(15deg) scale(0.85);
      z-index: 5;
      opacity: 0.8;
    }
    .card.next {
      transform: translateX(200px) translateZ(-100px) rotateY(-15deg) scale(0.85);
      z-index: 5;
      opacity: 0.8;
    }
    .card.far-left {
      transform: translateX(-350px) translateZ(-200px) rotateY(25deg) scale(0.7);
      z-index: 2;
      opacity: 0.6;
    }
    .card.far-right {
      transform: translateX(350px) translateZ(-200px) rotateY(-25deg) scale(0.7);
      z-index: 2;
      opacity: 0.6;
    }
    .card.hidden {
      transform: translateX(0) translateZ(-400px) rotateY(0deg) scale(0.4);
      z-index: 1;
      opacity: 0.3;
    }
    .nav-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 1.5rem;
      color: #333;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      z-index: 100;
    }
    .nav-arrow:hover {
      background: white;
      transform: translateY(-50%) scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }
    .nav-arrow.left {
      left: 20px;
    }
    .nav-arrow.right {
      right: 20px;
    }
    .dots-container {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 40px;
    }
    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #ddd;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .dot.active {
      background: #4A90E2;
      transform: scale(1.2);
    }
    .dot:hover {
      background: #6BA3F0;
    }
    .card:nth-child(1) { background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%); }
    .card:nth-child(2) { background: linear-gradient(135deg, #5CB3CC 0%, #4A90E2 100%); }
    .card:nth-child(3) { background: linear-gradient(135deg, #45B7D1 0%, #357ABD 100%); }
    .card:nth-child(4) { background: linear-gradient(135deg, #4A90E2 0%, #5CB3CC 100%); }
    .card:nth-child(5) { background: linear-gradient(135deg, #357ABD 0%, #45B7D1 100%); }
    .card:nth-child(6) { background: linear-gradient(135deg, #5CB3CC 0%, #4A90E2 100%); }
    .card:nth-child(7) { background: linear-gradient(135deg, #45B7D1 0%, #357ABD 100%); }
    .card:nth-child(8) { background: linear-gradient(135deg, #4A90E2 0%, #5CB3CC 100%); }
    .card:nth-child(9) { background: linear-gradient(135deg, #357ABD 0%, #45B7D1 100%); }
    .card:nth-child(10) { background: linear-gradient(135deg, #5CB3CC 0%, #4A90E2 100%); }

    /* Kolaborasi Section */
    .kolaborasi-section {
      margin-bottom: 60px;
    }
    .kolaborasi-main-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 50px;
      text-align: center;
    }
    .kolaborasi-subsection {
      margin-top: 60px;
      text-align: center;
    }
    .kolaborasi-header h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 30px;
    }
    .kolaborasi-carousel-container {
  position: relative;
  width: 100%;
  max-width: 900px;
  margin: 0 auto;
  overflow: hidden;
  padding: 20px 0;
}
.kolaborasi-carousel {
  display: flex;
  transition: transform 0.5s cubic-bezier(.77,0,.18,1);
  gap: 32px;
}
.kolaborasi-slide {
  width: 252.19px;
  min-width: 252.19px;
  height: 176.81px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px;
  box-sizing: border-box;
  transition: box-shadow 0.3s;
}
.kolaborasi-slide img {
  max-width: 100%;
  max-height: 120px;
  object-fit: contain;
  display: block;
  margin: 0 auto;
}
.kolaborasi-indicators {
  display: flex;
  justify-content: center;
  gap: 8px;
  margin-top: 18px;
}
.kolaborasi-indicators .indicator {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #ddd;
  cursor: pointer;
  transition: background 0.3s;
}
.kolaborasi-indicators .indicator.active {
  background: #4A90E2;
}

    @media (max-width: 768px) {
      .ruanglingkup-carousel-title {
        font-size: 2rem;
        margin-bottom: 30px;
      }
      .kolaborasi-main-title {
        font-size: 2rem;
        margin-bottom: 30px;
      }
      .carousel-container {
        height: 250px;
      }
      .card {
        width: 300px;
        height: 400px;
        font-size: 0.95rem;
      }
      .card.active {
        transform: translateX(0) translateZ(0) rotateY(0deg) scale(1);
      }
      .card.prev {
        transform: translateX(-120px) translateZ(-80px) rotateY(10deg) scale(0.8);
      }
      .card.next {
        transform: translateX(120px) translateZ(-80px) rotateY(-10deg) scale(0.8);
      }
      .card.far-left {
        transform: translateX(-200px) translateZ(-150px) rotateY(20deg) scale(0.6);
      }
      .card.far-right {
        transform: translateX(200px) translateZ(-150px) rotateY(-20deg) scale(0.6);
      }
      .nav-arrow {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
      }
      .nav-arrow.left {
        left: 10px;
      }
      .nav-arrow.right {
        right: 10px;
      }
      .kolaborasi-card {
        width: 300px;
        height: 150px;
      }
    }
  </style>
</head>

<body>
  @include('navbar')
  <section class="hero" aria-label="Introduction headline">
    <h1>Transformasikan Hidup Anda Melalui<br />Pendidikan Terbaik</h1>
    <p>Menjadi Lembaga Konsultan Pendidikan dan Pelatihan Pengembangan Diri dan Organisasi yang Profesional di Indonesia</p>
  </section>

  <main class="container" aria-label="Main content area">

    <section class="about-section" aria-labelledby="about-title">
      <div class="about-logo" role="img" aria-label="Black placeholder box with text logo">
        logo
      </div>
      <div class="about-text">
        <h2 id="about-title">Tentang <span>Edukasi4ID</span></h2>
        <p>
          Edukasi4ID adalah platform yang dibentuk oleh para praktisi Teknologi Informasi dan Komunikasi yang berkomitmen kuat terhadap pengembangan pendidikan vokasi di Indonesia.
        </p>
      </div>
      <!-- Glass Card Section -->
<div class="glass-card-section">
  <div class="glass-card">
    <div class="glass-card-content">
      <div class="glass-card-column">
        <div class="glass-card-item">
          <span class="glass-card-icon">1</span>
          <span class="glass-card-text">Membantu Sekolah Menengah Kejuruan (SMK) dalam pelaksanaan prakerin</span>
        </div>
        <div class="glass-card-item">
          <span class="glass-card-icon">2</span>
          <span class="glass-card-text">Menyelenggarakan pelatihan SDM secara profesional</span>
        </div>
        <div class="glass-card-item">
          <span class="glass-card-icon">3</span>
          <span class="glass-card-text">Menyediakan kegiatan Uji Kompetensi berbasis industri</span>
        </div>
        <div class="glass-card-item">
          <span class="glass-card-icon">4</span>
          <span class="glass-card-text">Mengembangkan inovasi dalam pembelajaran teknologi</span>
        </div>
      </div>
      <div class="glass-card-column">
        <div class="glass-card-item">
          <span class="glass-card-icon">5</span>
          <span class="glass-card-text">Menyusun kurikulum sesuai kebutuhan industri</span>
        </div>
        <div class="glass-card-item">
          <span class="glass-card-icon">6</span>
          <span class="glass-card-text">Memberikan akses materi dan pelatihan terkini</span>
        </div>
        <div class="glass-card-item">
          <span class="glass-card-icon">7</span>
          <span class="glass-card-text">Memfasilitasi kerja sama dengan dunia industri</span>
        </div>
        <div class="glass-card-item">
          <span class="glass-card-icon">8</span>
          <span class="glass-card-text">Menyediakan konsultasi dan bimbingan karir</span>
        </div>
      </div>
    </div>
    <!-- Floating particles -->
    <div class="glass-card-particle"></div>
    <div class="glass-card-particle"></div>
    <div class="glass-card-particle"></div>
  </div>
</div>
    </section>

    <div class="ruanglingkup-carousel-wrapper">
      <h1 class="ruanglingkup-carousel-title">Ruang Lingkup</h1>
      <div class="carousel-container">
        <div class="nav-arrow left" onclick="prevCard()">‹</div>
        <div class="nav-arrow right" onclick="nextCard()">›</div>
        <div class="carousel-track">
          <div class="card active">
            <div class="card-content">Teknologi Informasi</div>
          </div>
          <div class="card next">
            <div class="card-content">Penelitian & Inovasi</div>
          </div>
          <div class="card far-right">
            <div class="card-content">Pendidikan Digital</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Jaringan Global</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Keamanan Siber</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Artificial Intelligence</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Data Analytics</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Cloud Computing</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Mobile Development</div>
          </div>
          <div class="card hidden">
            <div class="card-content">Digital Innovation</div>
          </div>
        </div>
      </div>
      <div class="dots-container" id="dotsContainer">
        <!-- Dots will be generated by JavaScript -->
      </div>
    </div>

    <!-- Kolaborasi Section -->
<section class="kolaborasi-section">
  <h1 class="kolaborasi-main-title">Kolaborasi</h1>
  <div class="kolaborasi-subsection" id="perusahaan-section">
    <div class="kolaborasi-header"><h2>Perusahaan</h2></div>
    <div class="kolaborasi-carousel-container">
      <button class="nav-arrow left" onclick="moveKolaborasiSlide(-1, 'perusahaan')">‹</button>
      <div class="kolaborasi-carousel" id="perusahaan-carousel">
  @foreach($kolaborasiPerusahaan as $item)
    <div class="kolaborasi-slide">
      <img src="{{ asset('storage/'.$item->logo) }}" alt="{{ $item->nama }}">
    </div>
  @endforeach
</div>
      <button class="nav-arrow right" onclick="moveKolaborasiSlide(1, 'perusahaan')">›</button>
    </div>
    <div class="kolaborasi-indicators" id="perusahaan-indicators"></div>
  </div>

      <div class="kolaborasi-subsection" id="akademisi-section">
        <div class="kolaborasi-header"><h2>Akademisi</h2></div>
        <div class="kolaborasi-carousel-container">
              <button class="nav-arrow left" onclick="moveKolaborasiSlide(-1, 'akademisi')">‹</button>
         <div class="kolaborasi-carousel" id="akademisi-carousel">
  @foreach($kolaborasiAkademisi as $item)
    <div class="kolaborasi-slide">
      <img src="{{ asset('storage/'.$item->logo) }}" alt="{{ $item->nama }}">
    </div>
  @endforeach
</div>
              <button class="nav-arrow right" onclick="moveKolaborasiSlide(1, 'akademisi')">›</button>
        </div>
       <div class="kolaborasi-indicators" id="akademisi-indicators"></div>
      </div>
    </section>

    <!-- Maps & Kontak Section -->
<section class="glass-card-section" style="margin-top:60px;">
  <div class="glass-card" style="max-width:900px;display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center;">
    <!-- Map Placeholder -->
    <div style="background:#111; border-radius:16px; min-height:220px; display:flex; align-items:center; justify-content:center;">
      <span style="color:#fff; font-weight:700; font-size:1.1rem;">MAPS LOKASI (akan diisi iframe)</span>
    </div>
    <!-- Kontak Info -->
    <div style="display:flex; flex-direction:column; gap:24px;">
      <div style="display:flex; align-items:center; gap:14px;">
        <!-- SVG lokasi -->
        <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path fill="#69cae8" d="M12 2C7.03 2 3 6.03 3 11c0 5.25 7.11 10.39 8.09 11.09.34.25.82.25 1.16 0C13.89 21.39 21 16.25 21 11c0-4.97-4.03-9-9-9zm0 17.88C9.14 17.07 5 13.61 5 11c0-3.86 3.14-7 7-7s7 3.14 7 7c0 2.61-4.14 6.07-7 8.88z"/><circle cx="12" cy="11" r="3" fill="#69cae8"/></svg>
        <span class="glass-card-text" style="font-size:1rem;">Jl. Contoh Alamat No. 123, Kota, Provinsi</span>
      </div>
      <div style="display:flex; align-items:center; gap:14px;">
        <!-- SVG email -->
        <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path fill="#69cae8" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zm0 12H4V8.99l8 6.99 8-6.99V18z"/></svg>
        <span class="glass-card-text" style="font-size:1rem;">info@edukasi4.id</span>
      </div>
      <div style="display:flex; align-items:center; gap:14px;">
        <!-- SVG WhatsApp/Telepon -->
        <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path fill="#69cae8" d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.11.55 4.16 1.6 5.98L0 24l6.18-1.62A11.93 11.93 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.48-8.52zM12 22c-1.85 0-3.68-.5-5.26-1.45l-.38-.23-3.67.96.98-3.58-.24-.37A9.93 9.93 0 1 1 22 12c0 5.52-4.48 10-10 10zm5.2-7.8c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.19-.44-2.27-1.41-.84-.75-1.41-1.67-1.58-1.95-.16-.28-.02-.43.12-.57.12-.12.28-.32.42-.48.14-.16.18-.28.28-.46.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.34-.01-.52-.01-.18 0-.48.07-.73.34-.25.28-.96.94-.96 2.29 0 1.35.98 2.66 1.12 2.85.14.18 1.93 2.95 4.68 4.02.65.28 1.16.45 1.56.58.65.21 1.24.18 1.7.11.52-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.25-.2-.53-.34z"/></svg>
        <span class="glass-card-text" style="font-size:1rem;">0812-3456-7890</span>
      </div>
    </div>
  </div>
</section>

@include('footer')
  </main>

  <script>
    // Ruang Lingkup Carousel
    let currentIndex = 0;
    const totalCards = 10;
    const cards = document.querySelectorAll('.card');
    const dotsContainer = document.getElementById('dotsContainer');
    const kolaborasiHandlers = {};

    // Generate dots
    for (let i = 0; i < totalCards; i++) {
      const dot = document.createElement('div');
      dot.className = 'dot';
      if (i === 0) dot.classList.add('active');
      dot.onclick = () => goToCard(i);
      dotsContainer.appendChild(dot);
    }

    const dots = document.querySelectorAll('.dot');

    function updateCarousel() {
      cards.forEach((card, index) => {
        card.classList.remove('active', 'prev', 'next', 'far-left', 'far-right', 'hidden');
        const diff = index - currentIndex;
        if (diff === 0) {
          card.classList.add('active');
        } else if (diff === -1 || (diff === totalCards - 1 && currentIndex === 0)) {
          card.classList.add('prev');
        } else if (diff === 1 || (diff === -(totalCards - 1) && currentIndex === totalCards - 1)) {
          card.classList.add('next');
        } else if (diff === -2 || (diff === totalCards - 2 && currentIndex <= 1)) {
          card.classList.add('far-left');
        } else if (diff === 2 || (diff === -(totalCards - 2) && currentIndex >= totalCards - 2)) {
          card.classList.add('far-right');
        } else {
          card.classList.add('hidden');
        }
      });
      // Update dots
      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
      });
    }

    function nextCard() {
      currentIndex = (currentIndex + 1) % totalCards;
      updateCarousel();
    }

    function prevCard() {
      currentIndex = (currentIndex - 1 + totalCards) % totalCards;
      updateCarousel();
    }

    function goToCard(index) {
      currentIndex = index;
      updateCarousel();
    }

    // Kolaborasi Perusahaan Logo Carousel
function setupKolaborasiLogoCarousel(id) {
  const carousel = document.getElementById(id + '-carousel');
  const slides = carousel.querySelectorAll('.kolaborasi-slide');
  const indicatorsContainer = document.getElementById(id + '-indicators');
  let current = 0;

  // Buat indikator
  indicatorsContainer.innerHTML = '';
  slides.forEach((_, i) => {
    const dot = document.createElement('div');
    dot.className = 'indicator' + (i === 0 ? ' active' : '');
    dot.onclick = () => goTo(i);
    indicatorsContainer.appendChild(dot);
  });
  const indicators = indicatorsContainer.querySelectorAll('.indicator');

  function update() {
    carousel.style.transform = `translateX(-${current * (slides[0].offsetWidth + 32)}px)`;
    indicators.forEach((dot, i) => dot.classList.toggle('active', i === current));
  }
  function move(n) {
    current = (current + n + slides.length) % slides.length;
    update();
  }
  function goTo(i) {
    current = i;
    update();
  }
  kolaborasiHandlers[id] = move;
  update();
  setInterval(() => move(1), 4000);
}

// Handler global agar arrow bisa akses carousel manapun
window.moveKolaborasiSlide = function(n, t) {
  if (kolaborasiHandlers[t]) kolaborasiHandlers[t](n);
};

// Inisialisasi
setupKolaborasiLogoCarousel('perusahaan');
setupKolaborasiLogoCarousel('akademisi');

    // Auto-rotate for main carousel
    setInterval(nextCard, 5000);

    // Click on cards to navigate
    cards.forEach((card, index) => {
      card.addEventListener('click', () => {
        if (card.classList.contains('next')) {
          nextCard();
        } else if (card.classList.contains('prev')) {
          prevCard();
        } else if (!card.classList.contains('active')) {
          goToCard(index);
        }
      });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') prevCard();
      if (e.key === 'ArrowRight') nextCard();
    });

    // Touch/swipe support
    let startX = 0;
    let endX = 0;
    const carouselContainer = document.querySelector('.carousel-container');

    carouselContainer.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
    });

    carouselContainer.addEventListener('touchmove', (e) => {
      endX = e.touches[0].clientX;
    });

    carouselContainer.addEventListener('touchend', () => {
      if (startX - endX > 50) {
        nextCard();
      } else if (endX - startX > 50) {
        prevCard();
      }
    });
  </script>
</body>

</html>