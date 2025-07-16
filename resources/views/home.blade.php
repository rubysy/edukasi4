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
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
      padding: 20px 0;
    }
    .kolaborasi-carousel-track {
      display: flex;
      gap: 20px;
      transition: transform 0.5s ease;
    }
    .kolaborasi-card {
      width: 428px;
      height: 180px;
      background: #2bdde3ff;
      border-radius: 12px;
      flex-shrink: 0;
    }
    .kolaborasi-dots-container {
      display: flex;
      justify-content: center;
      gap: 8px;
      margin-top: 20px;
    }
    .kolaborasi-dots-container .dot {
      width: 8px;
      height: 8px;
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
  <header>
    <a href="#" class="logo" aria-label="Logo Edukasi4ID">
      <!-- Simplified stylized '4' logo icon -->
      <svg viewBox="0 0 64 64" aria-hidden="true">
        <rect x="10" y="10" width="12" height="12" />
        <rect x="28" y="10" width="12" height="12" fill="#f15a24" />
        <rect x="46" y="10" width="8" height="12" fill="#262626" />
        <text x="10" y="54" font-size="36" font-family="Arial" fill="#69cae8" font-weight="bold">4</text>
      </svg>
      <span style="margin-left:5px;">EDUKASI</span>
    </a>
    <nav role="navigation" aria-label="Primary navigation">
      <a href="#" class="active" aria-current="page">Beranda</a>
      <a href="#">Profil</a>
      <a href="#">Layanan</a>
      <a href="#">Mitra</a>
      <a href="#">Kontak Kami</a>
      <a href="#">LMS</a>
    </nav>
  </header>

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
          <div class="nav-arrow left" onclick="moveKolaborasi('perusahaan', -1)">‹</div>
          <div class="kolaborasi-carousel-track" id="perusahaan-track">
            <!-- Contoh isi, bisa diganti sesuai kebutuhan -->
            <div class="kolaborasi-card">PT. Teknologi Nusantara</div>
            <div class="kolaborasi-card">PT. Inovasi Digital</div>
            <div class="kolaborasi-card">PT. Solusi Data</div>
            <div class="kolaborasi-card">PT. Cloud Indonesia</div>
            <div class="kolaborasi-card">PT. AI Cerdas</div>
          </div>
          <div class="nav-arrow right" onclick="moveKolaborasi('perusahaan', 1)">›</div>
        </div>
        <div class="kolaborasi-dots-container" id="perusahaan-dots"></div>
      </div>

      <div class="kolaborasi-subsection" id="akademisi-section">
        <div class="kolaborasi-header"><h2>Akademisi</h2></div>
        <div class="kolaborasi-carousel-container">
          <div class="nav-arrow left" onclick="moveKolaborasi('akademisi', -1)">‹</div>
          <div class="kolaborasi-carousel-track" id="akademisi-track">
            <div class="kolaborasi-card">Universitas Indonesia</div>
            <div class="kolaborasi-card">ITB</div>
            <div class="kolaborasi-card">IPB</div>
            <div class="kolaborasi-card">ITS</div>
            <div class="kolaborasi-card">Universitas Brawijaya</div>
          </div>
          <div class="nav-arrow right" onclick="moveKolaborasi('akademisi', 1)">›</div>
        </div>
        <div class="kolaborasi-dots-container" id="akademisi-dots"></div>
      </div>
    </section>

  </main>

  <script>
    // Ruang Lingkup Carousel
    let currentIndex = 0;
    const totalCards = 10;
    const cards = document.querySelectorAll('.card');
    const dotsContainer = document.getElementById('dotsContainer');

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

    // Kolaborasi Carousel
    function setupKolaborasiSlider(type) {
  const track = document.getElementById(type + '-track');
  const cards = Array.from(track.children);
  const dotsContainer = document.getElementById(type + '-dots');
  let current = 0;
  const total = cards.length;

  // Clone for infinite effect
  const firstClone = cards[0].cloneNode(true);
  const lastClone = cards[total - 1].cloneNode(true);
  track.appendChild(firstClone);
  track.insertBefore(lastClone, cards[0]);
  let slideCount = total + 2;

  function getCardWidth() {
    return cards[0].offsetWidth + 20;
  }

  track.style.transition = 'none';
  track.style.transform = `translateX(${-getCardWidth()}px)`;

  dotsContainer.innerHTML = '';
  for (let i = 0; i < total; i++) {
    const dot = document.createElement('div');
    dot.className = 'dot';
    if (i === 0) dot.classList.add('active');
    dot.onclick = () => goToKolaborasi(type, i);
    dotsContainer.appendChild(dot);
  }
  const dots = dotsContainer.querySelectorAll('.dot');

  function updateDots(idx) {
    dots.forEach((dot, i) => dot.classList.toggle('active', i === idx));
  }

  function move(n) {
    if (track.isTransitioning) return;
    track.isTransitioning = true;
    current += n;
    track.style.transition = 'transform 0.5s cubic-bezier(.77,0,.18,1)';
    track.style.transform = `translateX(${-getCardWidth() * (current + 1)}px)`;
    setTimeout(() => {
      if (current < 0) {
        track.style.transition = 'none';
        current = total - 1;
        track.style.transform = `translateX(${-getCardWidth() * (current + 1)}px)`;
      }
      if (current >= total) {
        track.style.transition = 'none';
        current = 0;
        track.style.transform = `translateX(${-getCardWidth() * (current + 1)}px)`;
      }
      updateDots(current);
      track.isTransitioning = false;
    }, 510);
    updateDots((current + total) % total);
  }

  function goTo(idx) {
    if (track.isTransitioning) return;
    current = idx;
    track.style.transition = 'transform 0.5s cubic-bezier(.77,0,.18,1)';
    track.style.transform = `translateX(${-getCardWidth() * (current + 1)}px)`;
    updateDots(current);
  }

  window['moveKolaborasi'] = window['moveKolaborasi'] || function(){};
  window['goToKolaborasi'] = window['goToKolaborasi'] || function(){};
  window['moveKolaborasi'] = function(t, n) {
    if (t === type) move(n);
  };
  window['goToKolaborasi'] = function(t, idx) {
    if (t === type) goTo(idx);
  };

  window.addEventListener('resize', () => {
    track.style.transition = 'none';
    track.style.transform = `translateX(${-getCardWidth() * (current + 1)}px)`;
  });
}

    // Initialize everything
    updateCarousel();
    initKol('perusahaan');
    initKol('akademisi');

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