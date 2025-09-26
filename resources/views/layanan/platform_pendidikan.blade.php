@extends('layouts.app')

@section('title', 'Platform_Pendidikan - Edukasi4ID')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header Section -->
    <div class="text-center mb-16 p-8">
      <h1 class="text-5xl font-bold">
        <span class="text-black">Platform</span> 
        <span style="color: #5cc7d1;">Pendidikan</span>
      </h1>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- Card 1 (Text Card) -->
      <div class="group col-span-1 sm:col-span-2 lg:col-span-2">
        <div class="relative p-8 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-100/30 to-blue-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10 space-y-4">
            <p class="text-base text-gray-600 leading-relaxed">
              Edukasi4ID merupakan platform Learning Management System (LMS) yang dirancang untuk memberikan pengalaman belajar yang optimal bagi siswa, guru, dan lembaga pendidikan. Dengan teknologi terkini, Edukasi4ID menawarkan berbagai fitur yang mendukung proses pembelajaran efektif, kolaboratif, dan interaktif.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 (Image Card) -->
      <div class="group">
        <div class="relative aspect-square rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-100/30 to-sky-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <img src="logo-edukasi4id.png" alt="Logo Edukasi4ID" class="w-full h-full object-contain p-8">
        </div>
      </div>

      <!-- Card 3 (Kenapa Harus EDUKASI4ID?) -->
      <div class="group col-span-1 sm:col-span-2 lg:col-span-2">
        <div class="relative p-8 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-100/30 to-blue-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10 space-y-4">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Kenapa Harus EDUKASI4ID?</h2>
            <ul class="space-y-2 text-base text-gray-600 leading-relaxed">
              <li>📚 Materi lengkap dan terstruktur, mudah dipahami.</li>
              <li>👩‍🏫 Integrasi untuk guru & siswa: kelas, penilaian, kolaborasi.</li>
              <li>🌐 Akses mudah kapan saja & di mana saja.</li>
              <li>💻 Teknologi modern dengan antarmuka intuitif.</li>        
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
