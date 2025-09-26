@extends('layouts.app')

@section('title', 'LMS - Edukasi4ID')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header Section -->
    <div class="text-center mb-16 p-8">
      <h1 class="text-5xl font-bold">
        <span class="text-black">Learning</span> 
        <span style="color: #5cc7d1;">Management System</span>
      </h1>
    </div>

    @php
      $hasTextContent = $textContent && $textContent->content;
      $hasImageContent = $imageContent && $imageContent->count() > 0;
      $imageCount = $hasImageContent ? $imageContent->count() : 0;
    @endphp

    @if(!$hasTextContent && !$hasImageContent)
      <!-- Empty State -->
      <div class="flex items-center justify-center min-h-[300px]">
        <div class="text-center">
          <div class="text-gray-300 mb-4">
            <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
          </div>
          <p class="text-gray-400 text-lg">Konten belum ditambahkan</p>
          <p class="text-gray-300 text-sm">Silakan tambahkan konten melalui admin panel</p>
        </div>
      </div>
    @else
      <!-- Dynamic Content Grid -->
      <div class="space-y-8">
        
        <!-- Text Content Card (jika ada) -->
        @if($hasTextContent)
          <div class="w-full">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
              <div class="p-8 md:p-12">
                @if($textContent->title)
                  <h2 class="text-2xl font-bold text-cyan-400 mb-6">{{ $textContent->title }}</h2>
                @else
                  <h2 class="text-2xl font-bold text-cyan-400 mb-6">Deskripsi</h2>
                @endif
                <div class="prose prose-gray max-w-none">
                  <p class="text-gray-700 leading-relaxed text-lg">{{ $textContent->content }}</p>
                </div>
              </div>
            </div>
          </div>
        @endif

        <!-- Image Content Cards -->
        @if($hasImageContent)
          @if($imageCount === 1)
            <!-- Single Large Image Card -->
            <div class="w-full">
              <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="w-full h-[250px] bg-gray-100 flex items-center justify-center overflow-hidden">
                  <img src="{{ asset('storage/'.$imageContent->first()->image) }}" 
                       alt="{{ $imageContent->first()->title ?? 'LMS Image' }}" 
                       class="w-full h-full object-cover">
                </div>
                  <div class="p-4">
                  </div>
              </div>
            </div>
          @else
            <!-- Multiple Images Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              @foreach($imageContent as $image)
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                  <div class="w-full h-[200px] bg-gray-100 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('storage/'.$image->image) }}" 
                         alt="{{ $image->title ?? 'LMS Image' }}" 
                         class="w-full h-full object-cover">
                  </div>
                    <div class="p-4">
                    </div>
                </div>
              @endforeach
            </div>
          @endif
        @endif

      </div>
    @endif

    <!-- Decorative Elements (jika ada konten) -->
    @if($hasTextContent || $hasImageContent)
      <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-br from-cyan-100 to-cyan-200 rounded-full opacity-20 animate-pulse"></div>
      <div class="absolute bottom-20 right-10 w-16 h-16 bg-gradient-to-br from-sky-100 to-sky-200 rounded-full opacity-20 animate-pulse delay-1000"></div>
    @endif

  </div>
</div>

<style>
/* Additional responsive styles */
@media (max-width: 768px) {
  .prose {
    font-size: 1rem;
  }
  
  .text-5xl {
    font-size: 2.5rem;
  }
  
  .p-8 {
    padding: 1.5rem;
  }
  
  .md\\:p-12 {
    padding: 1.5rem;
  }
}

@media (max-width: 640px) {
  .grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3 {
    grid-template-columns: 1fr;
  }
  
  .gap-6 {
    gap: 1rem;
  }
  
  .h-\\[222px\\] {
    height: 180px;
  }
  
  .h-\\[200px\\] {
    height: 160px;
  }
}
</style>
@endsection