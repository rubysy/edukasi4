@extends('layouts.app')

@section('title', 'Pelatihan - Edukasi4ID')
@php
use Illuminate\Support\Facades\Storage;
@endphp
@section('content')
<div class="min-h-screen bg-gray-50 py-12">
  <div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-10">
      <h1 class="text-5xl font-bold">
        <span class="text-black">Program</span>
        <span style="color: #5cc7d1;">Pelatihan</span>
      </h1>
    </div>

    <!-- Carousel -->
    <div class="flex overflow-x-auto snap-x snap-mandatory space-x-6 pb-6 px-4">
      @foreach($pelatihans as $pelatihan)
        <div class="snap-center shrink-0 w-[280px] sm:w-[320px] md:w-[360px] h-[420px] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:scale-105 transition">
          <!-- Image -->
          <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
            @if($pelatihan->image_url)
        <img src="{{ $pelatihan->image_url }}" alt="{{ $pelatihan->judul }}" class="w-full h-full object-cover">
    @else
        <div class="text-gray-400">No Image</div>
    @endif
          </div>
          <!-- Content -->
          <div class="p-4 flex-1 flex flex-col justify-between">
            <div>
              <h2 class="text-lg font-semibold text-sky-500">{{ $pelatihan->judul }}</h2>
              <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{ $pelatihan->deskripsi }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
