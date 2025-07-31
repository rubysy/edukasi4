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

    <!-- Carousel Section -->
    <div class="flex overflow-x-auto space-x-6 snap-x snap-mandatory pb-6">
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
  </div>
</div>
@endsection
