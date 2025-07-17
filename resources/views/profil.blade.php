@extends('layouts.app')

@section('title', 'Profil Edukasi4ID')

@section('navbar')
  @include('navbar')
@endsection

@section('content')
<div class="min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header Section with Glass Effect -->
    <div class="text-center mb-16 p-8 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg">
      <h1 class="text-5xl font-bold bg-gradient-to-r from-sky-600 to-blue-600 bg-clip-text text-transparent">
        Profil Edukasi4ID
      </h1>
    </div>

    <!-- Cards Grid -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
      
      <!-- Card 1 (Wide) -->
      <div class="group col-span-2" style="width: 700px;">
        <div class="relative h-full p-12 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-100/30 to-blue-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10 space-y-4">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Kami</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
              adalah Perusahaan Konsultan pendidikan dan layanan pelatihan/Layanan Pendidikan non formal yang fokus di bidang vokasi dan kejuruan untuk memenuhi kebutuhan industri, khususnya bidang Teknologi Informasi dan Komunikasi. Edukasi4ID dibentuk oleh para praktisi Teknologi Informasi dan Komunikasi yang sangat peduli terhadap perkembangan dunia Pendidikan di Indonesia khususnya bidang vokasi. Didirikan di Jakarta pada tanggal 11 November 2020, bertepatan saat terjadinya wabah Covid-19 dan dunia Pendidikan dipaksa untuk melakukan proses pembelajaran secara online (Dalam Jaringan), sehingga bisa menjadi solusi saat banyak Lembaga Pendidikan yang belum terbiasa dengan teknologi tersebut pada saat ini.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 (Image Card) -->
      <div class="group col-span-2 md:col-span-1">
        <div class="relative h-64 p-6 pb-4 rounded-2xl rounded-b-3xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-100/30 to-sky-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10">
            <!-- Card Content with Image -->
            <img src="your-image-source.jpg" alt="Card Image" class="w-full h-full object-cover rounded-2xl">
          </div>
        </div>
      </div>

      <!-- Card 4 (Image Card) - Positioned Opposite to Card 3 -->
      <div class="group col-span-2 md:col-span-1">
        <div class="relative h-64 p-6 pb-4 rounded-2xl rounded-b-3xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-100/30 to-sky-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10">
            <!-- Card Content with Image -->
            <img src="your-image-source.jpg" alt="Card Image" class="w-full h-full object-cover rounded-2xl">
          </div>
        </div>
      </div>

      <!-- Card 3 (Wide Text Card) - Position opposite to Card 2 -->
      <div class="group col-span-2" style="width: 700px;">
        <div class="relative h-full p-12 rounded-2xl bg-white/30 backdrop-blur-md border border-white/40 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/40 hover:-translate-y-1">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-100/30 to-blue-100/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <div class="relative z-10 space-y-4">
            <h2 class="text-3xl font-bold text-gray-800">Visi Misi</h2>
            <p class="text-sm text-gray-600 leading-relaxed">
              Visi: Menjadi Lembaga Konsultan Pendidikan dan Pelatihan Pengembangan Diri dan Organisasi yang Profesional di Indonesia.
            </p>
            <p class="text-sm text-gray-600 leading-relaxed">
              Misi:
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

@include('footer')
@endsection
