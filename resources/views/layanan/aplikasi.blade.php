@extends('layouts.app')

@section('title', 'Aplikasi - Edukasi4ID')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    
    <!-- Header Section -->
    <div class="text-center mb-16">
      <h1 class="text-4xl sm:text-5xl font-bold mb-4">
        <span class="text-gray-900">Aplikasi</span> 
        <span class="text-cyan-500">Edukasi4ID</span>
      </h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Berbagai aplikasi dan solusi teknologi yang telah kami kembangkan untuk membantu digitalisasi dan otomatisasi bisnis
      </p>
    </div>

    @if($aplikasis->count() > 0)
      <!-- Aplikasi Cards Container -->
      <div class="relative max-w-6xl mx-auto overflow-hidden rounded-3xl shadow-2xl">
        <div class="flex transition-transform duration-500 ease-out" id="aplikasiWrapper">
          @foreach($aplikasis as $index => $app)
            <div class="min-w-full {{ $index === 0 ? 'opacity-100 scale-100' : 'opacity-0 scale-95' }} transition-all duration-500 ease-out" data-index="{{ $index }}">
              <div class="bg-white rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-5 min-h-[500px]">
                
                <!-- Image Section - Larger space for showcase -->
                <div class="lg:col-span-3 relative bg-gradient-to-br from-slate-50 to-slate-200 flex items-center justify-center p-8 lg:p-12">
                  <img src="{{ asset('storage/'.$app->image) }}" 
                       alt="{{ $app->judul }}"
                       class="max-w-full max-h-96 object-contain rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
                  
                  @if($app->status !== 'active')
                    <div class="absolute top-6 right-6 px-3 py-1.5 rounded-full text-xs font-semibold text-white uppercase tracking-wide
                               {{ $app->status === 'development' ? 'bg-amber-500' : '' }}
                               {{ $app->status === 'maintenance' ? 'bg-red-500' : '' }}
                               {{ $app->status === 'deprecated' ? 'bg-gray-500' : '' }}">
                      {{ ucfirst($app->status) }}
                    </div>
                  @endif
                </div>
                
                <!-- Content Section -->
                <div class="lg:col-span-2 p-8 lg:p-12 flex flex-col justify-center space-y-6">
                  <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">{{ $app->judul }}</h3>
                  
                  <p class="text-lg text-gray-600 leading-relaxed">{{ $app->deskripsi }}</p>
                  
                  @if($app->tech_stacks)
                    <div class="bg-slate-50 p-4 rounded-xl border-l-4 border-cyan-500">
                        <div class="text-sm font-semibold text-gray-700 mb-3">Tech Stack:</div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($app->tech_stack_icons as $tech)
                                <div class="flex items-center space-x-2 bg-white px-3 py-1.5 rounded-lg shadow-sm">
                                    <!-- Icon dengan fallback mechanism -->
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <img 
                                            src="{{ $tech['icon'] }}" 
                                            alt="{{ $tech['name'] }}" 
                                            class="w-5 h-5 tech-icon"
                                            data-fallback="{{ $tech['fallback'] ?? '' }}"
                                            data-color="{{ $tech['color'] ?? '#6B7280' }}"
                                            data-name="{{ $tech['name'] }}"
                                            onerror="handleIconError(this)"
                                            loading="lazy"
                                        >
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">{{ $tech['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
        
        <!-- Navigation Arrows -->
        @if($aplikasis->count() > 1)
          <button onclick="changeSlide(-1)" 
                  class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-cyan-500 hover:text-white transition-all duration-300 hover:scale-110 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
          </button>
          
          <button onclick="changeSlide(1)" 
                  class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-cyan-500 hover:text-white transition-all duration-300 hover:scale-110 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </button>
        @endif
      </div>

      <!-- Slider Indicators -->
      @if($aplikasis->count() > 1)
        <div class="flex justify-center space-x-3 mt-8">
          @foreach($aplikasis as $index => $app)
            <button onclick="goToSlide({{ $index }})" 
                    data-index="{{ $index }}"
                    class="w-3 h-3 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-cyan-500 scale-125' : 'bg-gray-300 hover:bg-cyan-400' }}">
            </button>
          @endforeach
        </div>
      @endif
      
    @else
      <!-- Empty State -->
      <div class="text-center py-20">
        <div class="mb-8">
          <svg class="w-24 h-24 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2-2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012 2v2M7 7h10"></path>
          </svg>
        </div>
        <h3 class="text-2xl font-semibold text-gray-500 mb-3">Belum Ada Aplikasi</h3>
        <p class="text-gray-400 text-lg">Aplikasi sedang dalam tahap pengembangan</p>
      </div>
    @endif

  </div>
</div>

<script>
// Pastikan script cuma jalan sekali
if (typeof window.sliderInitialized === 'undefined') {
    window.sliderInitialized = true;

let currentSlide = 0;
// Debug: cek berapa banyak slides yang ada
const allSlides = document.querySelectorAll('[data-index]');
console.log('Total elements with data-index:', allSlides.length);

// Pisahkan selector untuk slides dan indicators dengan lebih spesifik
const slideElements = document.querySelectorAll('.min-w-full[data-index]');
const indicatorButtons = document.querySelectorAll('button[data-index]');

console.log('Slide elements found:', slideElements.length);
console.log('Indicator buttons found:', indicatorButtons.length);

const totalSlides = slideElements.length;

// Function to handle icon loading errors
function handleIconError(img) {
    const fallback = img.getAttribute('data-fallback');
    const color = img.getAttribute('data-color');
    const name = img.getAttribute('data-name');
    
    if (fallback && img.src !== fallback) {
        // Try fallback URL first
        img.src = fallback;
    } else {
        // If fallback also fails, create colored circle with initial
        const parent = img.parentElement;
        parent.innerHTML = `
            <div class="w-5 h-5 rounded-full flex items-center justify-center text-white text-xs font-bold" 
                 style="background-color: ${color}">
                ${name.charAt(0).toUpperCase()}
            </div>
        `;
    }
}

// Check if icons loaded properly on page load
document.addEventListener('DOMContentLoaded', function() {
    const techIcons = document.querySelectorAll('.tech-icon');
    techIcons.forEach(img => {
        setTimeout(() => {
            if (img.naturalWidth === 0) {
                handleIconError(img);
            }
        }, 1000);
    });
    
    // Pastikan initial state benar
    updateSlider();
});

function updateSlider() {
  const wrapper = document.getElementById('aplikasiWrapper');
  if (!wrapper) return;
  
  // Debug transform value
  const transformValue = `translateX(-${currentSlide * 100}%)`;
  console.log('Setting transform:', transformValue);
  wrapper.style.transform = transformValue;
  
  // Update card opacity and scale - pakai slideElements yang spesifik
  slideElements.forEach((slide, index) => {
    console.log(`Slide ${index}: ${index === currentSlide ? 'ACTIVE' : 'inactive'}`);
    if (index === currentSlide) {
      slide.classList.remove('opacity-0', 'scale-95');
      slide.classList.add('opacity-100', 'scale-100');
    } else {
      slide.classList.remove('opacity-100', 'scale-100');
      slide.classList.add('opacity-0', 'scale-95');
    }
  });
  
  // Update indicators - pakai indicatorButtons yang spesifik
  indicatorButtons.forEach((indicator, index) => {
    if (index === currentSlide) {
      indicator.classList.remove('bg-gray-300', 'hover:bg-cyan-400');
      indicator.classList.add('bg-cyan-500', 'scale-125');
    } else {
      indicator.classList.remove('bg-cyan-500', 'scale-125');
      indicator.classList.add('bg-gray-300', 'hover:bg-cyan-400');
    }
  });
  
  // Debug log untuk ngecek sinkronisasi
  console.log('=== SLIDER UPDATE ===');
  console.log('Current Slide:', currentSlide);
  console.log('Total Slides:', totalSlides);
  console.log('Wrapper transform:', wrapper.style.transform);
}

function changeSlide(direction) {
  // Pastikan cuma pindah ke slide yang ada datanya
  if (totalSlides === 0) return; // Kalau ga ada data sama sekali
  
  console.log('=== CHANGE SLIDE ===');
  console.log('Direction:', direction);
  console.log('Current slide before:', currentSlide);
  
  if (direction === 1) {
    // Slide ke kanan - langsung modulo buat cycle
    currentSlide = (currentSlide + 1) % totalSlides;
  } else if (direction === -1) {
    // Slide ke kiri - pakai modulo negatif
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  }
  
  console.log('Current slide after:', currentSlide);
  updateSlider();
}

function goToSlide(index) {
  // Pastikan index valid dan dalam range data yang ada
  if (index >= 0 && index < totalSlides) {
    console.log('Going to slide:', index);
    currentSlide = index;
    updateSlider();
  }
}

// Auto-advance slider every 6 seconds - cuma jalan kalau ada data
if (totalSlides > 1) {
  setInterval(() => {
    changeSlide(1);
  }, 6000);
}

// Touch/swipe support for mobile
let startX = 0;
let endX = 0;

document.addEventListener('touchstart', (e) => {
  startX = e.touches[0].clientX;
});

document.addEventListener('touchmove', (e) => {
  endX = e.touches[0].clientX;
});

document.addEventListener('touchend', () => {
  if (startX - endX > 50) {
    changeSlide(1);
  } else if (endX - startX > 50) {
    changeSlide(-1);
  }
});

} // End of sliderInitialized check</script>
</script>
@endsection