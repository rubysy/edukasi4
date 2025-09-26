@extends('layouts.app')

@section('title', 'Layanan - Edukasi4ID')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header Section -->
    <div class="text-center mb-16 p-8">
      <h1 class="text-5xl font-bold">
        <span class="text-black">Produk</span>
        <span style="color: #5cc7d1;">Kami</span>
      </h1>
    </div>

    <!-- Carousel Container -->
    <div class="relative">
      <!-- Desktop: Horizontal Scroll -->
      <div class="hidden md:flex overflow-x-auto space-x-6 snap-x snap-mandatory pb-6" id="desktop-carousel">
        @php
          $cards = [
            [
              'title' => 'Pelatihan',
              'url' => '/pelatihan',
              'description' => 'Program pelatihan yang dirancang untuk meningkatkan keterampilan siswa dengan pendekatan yang interaktif dan praktis.',
              'image' => '/images/pelatihan.png'
            ],
            [
              'title' => 'LMS',
              'url' => '/lms',
              'description' => 'Learning Management System. Sistem manajemen pembelajaran yang memungkinkan pengelolaan materi pembelajaran secara efisien dan terorganisir.',
              'image' => '/images/lms.png'
            ],
            [
              'title' => 'Konsultan',
              'url' => '/konsultan',
              'description' => 'Jasa konsultan pendidikan yang membantu institusi dalam merancang program dan kurikulum yang efektif.',
              'image' => '/images/konsultan.png'
            ],
            [
              'title' => 'Aplikasi',
              'url' => '/aplikasi',
              'description' => 'Pengembangan aplikasi yang dapat disesuaikan dengan kebutuhan institusi pendidikan untuk mendukung pembelajaran modern.',
              'image' => '/images/aplikasi.png'
            ],
            [
              'title' => 'Platform Pendidikan',
              'url' => '/platform_pendidikan',
              'description' => 'Layanan pembuatan website sekolah dan platform pendidikan yang profesional untuk mendukung kebutuhan digital institusi Anda.',
              'image' => '/images/platform.png'
            ],
          ];
        @endphp

        @foreach($cards as $card)
          <div class="snap-center shrink-0 w-[360px] h-[464px] bg-white shadow-lg rounded-xl overflow-hidden flex flex-col justify-between transform transition-transform duration-300 hover:scale-105">
            <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-full h-40 object-cover">
            <div class="p-6 flex flex-col justify-between flex-1">
              <div>
                <h2 class="text-xl font-semibold mb-2">{{ $card['title'] }}</h2>
                <p class="text-gray-600 mb-4">{{ $card['description'] }}</p>
              </div>
              <a href="{{ $card['url'] }}" 
                 class="text-white text-center py-2 px-4 rounded transition"
                 style="background-color: #6eeefa;">
                Pelajari Lebih Lanjut
              </a>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Mobile: Arrow Navigation Carousel -->
      <div class="md:hidden relative">
        <!-- Navigation Arrows -->
        <button id="prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow-lg rounded-full p-3 hover:bg-gray-50 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        
        <button id="next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow-lg rounded-full p-3 hover:bg-gray-50 transition-colors duration-200">
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>

        <!-- Cards Container -->
        <div class="overflow-hidden mx-8">
          <div id="mobile-carousel" class="flex transition-transform duration-500 ease-in-out">
            @foreach($cards as $index => $card)
              <div class="w-full shrink-0 px-2">
                <div class="w-full h-[464px] bg-white shadow-lg rounded-xl overflow-hidden flex flex-col justify-between">
                  <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-full h-40 object-cover">
                  <div class="p-6 flex flex-col justify-between flex-1">
                    <div>
                      <h2 class="text-xl font-semibold mb-2">{{ $card['title'] }}</h2>
                      <p class="text-gray-600 mb-4">{{ $card['description'] }}</p>
                    </div>
                    <a href="{{ $card['url'] }}" 
                       class="text-white text-center py-2 px-4 rounded transition"
                       style="background-color: #6eeefa;">
                      Pelajari Lebih Lanjut
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center space-x-2 mt-6">
          @foreach($cards as $index => $card)
            <button class="pagination-dot w-2 h-2 rounded-full transition-colors duration-200 {{ $index === 0 ? 'bg-sky-400' : 'bg-gray-300' }}" 
                    data-index="{{ $index }}"></button>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Mobile Carousel Functionality
  const mobileCarousel = document.getElementById('mobile-carousel');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  const paginationDots = document.querySelectorAll('.pagination-dot');
  
  let currentIndex = 0;
  const totalCards = {{ count($cards) }};

  function updateCarousel() {
    const translateX = -currentIndex * 100;
    mobileCarousel.style.transform = `translateX(${translateX}%)`;
    
    // Update pagination dots
    paginationDots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.remove('bg-gray-300');
        dot.classList.add('bg-sky-400');
      } else {
        dot.classList.remove('bg-sky-400');
        dot.classList.add('bg-gray-300');
      }
    });
    
    // Update button states
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === totalCards - 1;
  }

  // Previous button
  prevBtn.addEventListener('click', function() {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  // Next button
  nextBtn.addEventListener('click', function() {
    if (currentIndex < totalCards - 1) {
      currentIndex++;
      updateCarousel();
    }
  });

  // Pagination dots
  paginationDots.forEach((dot, index) => {
    dot.addEventListener('click', function() {
      currentIndex = index;
      updateCarousel();
    });
  });

  // Touch/Swipe support for mobile
  let startX = 0;
  let currentX = 0;
  let isDragging = false;

  mobileCarousel.addEventListener('touchstart', function(e) {
    startX = e.touches[0].clientX;
    isDragging = true;
    mobileCarousel.style.transition = 'none';
  });

  mobileCarousel.addEventListener('touchmove', function(e) {
    if (!isDragging) return;
    
    currentX = e.touches[0].clientX;
    const diffX = currentX - startX;
    const translateX = -currentIndex * 100 + (diffX / mobileCarousel.offsetWidth) * 100;
    
    mobileCarousel.style.transform = `translateX(${translateX}%)`;
  });

  mobileCarousel.addEventListener('touchend', function(e) {
    if (!isDragging) return;
    
    isDragging = false;
    mobileCarousel.style.transition = 'transform 0.5s ease-in-out';
    
    const diffX = currentX - startX;
    const threshold = 50;
    
    if (diffX > threshold && currentIndex > 0) {
      currentIndex--;
    } else if (diffX < -threshold && currentIndex < totalCards - 1) {
      currentIndex++;
    }
    
    updateCarousel();
  });

  // Initialize
  updateCarousel();
});
</script>

@endsection