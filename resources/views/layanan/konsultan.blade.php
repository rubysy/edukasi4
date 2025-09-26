@extends('layouts.app')

@section('title', 'Konsultan - Edukasi4ID')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
  <div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-10">
      <h1 class="text-5xl font-bold">
        <span class="text-black">Kegiatan</span>
        <span style="color: #5cc7d1;">Konsultan Pendidikan</span>
      </h1>
    </div>

    <!-- Carousel -->
    <div class="flex overflow-x-auto snap-x snap-mandatory space-x-6 pb-6 px-4">
      @foreach($konsultans as $konsultan)
        <div class="snap-center shrink-0 w-[280px] sm:w-[320px] md:w-[360px] h-[420px] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:scale-105 transition">
          <!-- Image -->
          <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
            <img src="{{ asset('storage/'.$konsultan->image) }}" alt="{{ $konsultan->judul }}" class="w-full h-full object-cover">
          </div>
          <!-- Content -->
          <div class="p-4 flex-1 flex flex-col justify-between">
            <div>
              <h2 class="text-lg text-black font-semibold">{{ $konsultan->judul }}</h2>
              <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{ $konsultan->deskripsi }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
