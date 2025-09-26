@extends('layouts.app')

@section('title', 'Profil Edukasi4ID')

@section('navbar')
  @include('navbar')
@endsection

@section('content')
<div class="min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header Section with Glass Effect -->
    <div class="text-center mb-16 p-8">
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
        <span class="text-black">Profil</span> 
        <span style="color: #5cc7d1;">Edukasi4ID</span>
      </h1>
    </div>
    
    <!-- Cards Grid -->
    <div class="grid gap-6 md:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
      
      <!-- Card 1 (Wide) - Tentang Kami -->
      <div class="group col-span-1 md:col-span-2 profil-wide-card">
        <div class="relative h-full p-6 sm:p-8 lg:p-12 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-100/30 to-blue-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10 space-y-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Tentang Kami</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
              adalah Perusahaan Konsultan pendidikan dan layanan pelatihan/Layanan Pendidikan non formal yang fokus di bidang vokasi dan kejuruan untuk memenuhi kebutuhan industri, khususnya bidang Teknologi Informasi dan Komunikasi. Edukasi4ID dibentuk oleh para praktisi Teknologi Informasi dan Komunikasi yang sangat peduli terhadap perkembangan dunia Pendidikan di Indonesia khususnya bidang vokasi. Didirikan di Jakarta pada tanggal 11 November 2020, bertepatan saat terjadinya wabah Covid-19 dan dunia Pendidikan dipaksa untuk melakukan proses pembelajaran secara online (Dalam Jaringan), sehingga bisa menjadi solusi saat banyak Lembaga Pendidikan yang belum terbiasa dengan teknologi tersebut pada saat ini.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 (Image Card) - Top Position -->
      <div class="group col-span-1">
        @if($topImage && $topImage->image)
          <!-- Kalau ada image, cuma tampil image tanpa card -->
          <div class="relative h-48 sm:h-56 lg:h-64 transition-all duration-300 hover:-translate-y-1">
            <img src="{{ asset('storage/'.$topImage->image) }}" 
                 alt="{{ $topImage->title ?? 'Profil Image' }}" 
                 class="w-full h-full object-cover rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
          </div>
        @else
          <!-- Kalau belum ada image, tampil card dengan placeholder -->
          <div class="relative h-48 sm:h-56 lg:h-64 p-6 pb-4 rounded-2xl rounded-b-3xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-100/30 to-sky-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
              <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl flex items-center justify-center">
                <div class="text-gray-500 text-center">
                   <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                  <p class="text-sm">No Image</p>
                </div>
              </div>
            </div>
          </div>
        @endif
      </div>

      <!-- Card 4 (Image Card) - Bottom Position -->
      <div class="group col-span-1 order-3 md:order-2">
        @if($bottomImage && $bottomImage->image)
          <!-- Kalau ada image, cuma tampil image tanpa card -->
          <div class="relative h-48 sm:h-56 lg:h-64 transition-all duration-300 hover:-translate-y-1">
            <img src="{{ asset('storage/'.$bottomImage->image) }}" 
                 alt="{{ $bottomImage->title ?? 'Profil Image' }}" 
                 class="w-full h-full object-cover rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
          </div>
        @else
          <!-- Kalau belum ada image, tampil card dengan placeholder -->
          <div class="relative h-48 sm:h-56 lg:h-64 p-6 pb-4 rounded-2xl rounded-b-3xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-100/30 to-sky-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
              <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl flex items-center justify-center">
                <div class="text-gray-500 text-center">
                  <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 002 2z"></path>
                  </svg>
                  <p class="text-sm">No Image</p>
                </div>
              </div>
            </div>
          </div>
        @endif
      </div>

      <!-- Card 3 (Wide Text Card) - Visi Misi -->
      <div class="group col-span-1 md:col-span-2 order-2 md:order-3 profil-wide-card">
        <div class="relative h-full p-6 sm:p-8 lg:p-12 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-100/30 to-blue-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10 space-y-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Visi Misi</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
              🎯Visi: Menjadi Lembaga Konsultan Pendidikan dan Pelatihan Pengembangan Diri dan Organisasi yang Profesional di Indonesia.
            </p>
            <p class="text-sm text-gray-600 leading-relaxed">
              🤝Misi:
            </p>
            <p class="text-sm text-gray-600 leading-relaxed">
              • Melayani kebutuhan peningkatan kompetensi Pendidikan, Profesi dan masyarakat di Bidang Teknologi Informasi Komunikasi serta pengembangan SDM.
            </p>
            <p class="text-sm text-gray-600 leading-relaxed">
              • Melaksanakan seminar dan pelatihan di bidang TIK, SDM, Character Building dan Capacity Building untuk kebutuhan pribadi Lembaga dan Organisasi.        
            </p>
            <p class="text-sm text-gray-600 leading-relaxed">
              • Menjamin kepuasan pelanggan dalam melayani jasa pelatihan Pendidikan dan Update Teknologi.
            </p>
            <p class="text-sm text-gray-600 leading-relaxed">
              • Melakukan kerjasama dengan Lembaga terkait, Perguruan Tinggi, Instansi Pemerintah atau Swasta dan menggunakan Tenaga Pengajar yang memiliki kemampuan Tenaga Ahli.          
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Custom CSS untuk override fixed width pada mobile */
@media (max-width: 768px) {
  .profil-wide-card {
    width: 100% !important;
    max-width: 100% !important;
  }
  
  /* Ensure grid works properly on mobile */
  .profil-wide-card.group {
    grid-column: 1 / -1; /* Full width on mobile */
  }
}

/* Tablet adjustments */
@media (min-width: 769px) and (max-width: 1024px) {
  .profil-wide-card {
    width: 100% !important;
    max-width: 700px;
  }
}

/* Desktop - keep original styling */
@media (min-width: 1025px) {
  .profil-wide-card {
    width: 700px;
  }
}
</style>
@endsection