<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<main>
  <!-- Loading Spinner -->
  <div id="loading-overlay" class="fixed inset-0 bg-white flex items-center justify-center z-[9999] transition-opacity duration-500 hidden">
    <div class="w-12 h-12 border-4 border-gray-200 border-t-blue-500 rounded-full animate-spin"></div>
  </div>

  <!-- Hero Section -->
  <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('https://lspsignal.id/gambar/HeaderWeb1.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white text-center p-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Edukasi4 ID</h1>
      <p class="text-lg md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac elit nisi.</p>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 md:px-20">
      <div class="flex flex-col md:flex-row gap-12 items-center">
        <img src="https://lspsignal.id/gambar/signal.jpg" alt="Tentang Kami" class="w-full md:w-1/2 rounded-lg shadow">
        <div>
          <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
          <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, veniam. Pariatur nisi in eum maiores perferendis officiis.</p>
          <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut turpis ac velit varius aliquam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sertifikasi Kami -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-20">
      <h2 class="text-3xl font-bold text-center mb-12">Sertifikasi Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach(['Skema Sertifikasi', 'Tempat Uji Kompetensi', 'Alur Proses Sertifikasi'] as $title)
        <div class="bg-gray-100 rounded-lg p-6 shadow-md text-center">
          <h3 class="text-xl font-semibold mb-4">{{ $title }}</h3>
          <a href="#" class="text-blue-600 hover:underline">Selengkapnya</a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Our Values -->
  <section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 md:px-20">
      <h2 class="text-3xl font-bold text-center mb-12">Nilai Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="text-center">
          <i class="fas fa-award text-4xl text-blue-600 mb-4"></i>
          <h3 class="text-xl font-semibold mb-2">Profesional</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="text-center">
          <i class="fas fa-briefcase text-4xl text-blue-600 mb-4"></i>
          <h3 class="text-xl font-semibold mb-2">Kualitas</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="text-center">
          <i class="fas fa-chart-line text-4xl text-blue-600 mb-4"></i>
          <h3 class="text-xl font-semibold mb-2">Tanggung Jawab</h3>
          <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Informasi Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6 md:px-20">
      <h2 class="text-3xl font-bold text-center mb-12">Informasi</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @for($i = 1; $i <= 4; $i++)
        <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
          <img src="https://via.placeholder.com/300x180" alt="Informasi {{ $i }}" class="w-full">
          <div class="p-4">
            <h3 class="font-semibold text-lg mb-2">Judul Informasi {{ $i }}</h3>
            <p class="text-sm text-gray-600">12 Jul 2025</p>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="container mx-auto px-6 md:px-20 grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h4 class="text-lg font-semibold mb-2">Edukasi4 ID</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, sapiente.</p>
      </div>
      <div>
        <h4 class="text-lg font-semibold mb-2">Kontak</h4>
        <p>Email: info@edukasi4.id</p>
        <p>Telepon: +62 123-4567-890</p>
      </div>
      <div>
        <h4 class="text-lg font-semibold mb-2">Ikuti Kami</h4>
        <div class="flex gap-4">
          <a href="#" class="text-white hover:text-blue-400"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-white hover:text-blue-400"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white hover:text-blue-400"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <div class="text-center mt-8 text-sm text-gray-400">© 2025 Edukasi4 ID. All rights reserved.</div>
  </footer>
</main>
@endsection
