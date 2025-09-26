@extends('layouts.app')
@section('title', 'Kontak - Edukasi4ID')
@section('content')

<div class="min-h-screen bg-gray-50 relative overflow-hidden">
    

    <div class="relative z-10 container mx-auto px-4 py-8 md:py-16">
        <div class="flex justify-center">
          <!-- Background Grid Pattern using Image -->
    <div class="absolute inset-0 opacity-30" 
         style="background-image: url('{{ asset('images/grid.png') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;">
    </div>
            <!-- Contact Card -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 max-w-4xl w-full border border-gray-100 relative overflow-hidden">
                
                <!-- Card Header -->
                <div class="mb-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Kontak <span class="text-cyan-400">Kami</span>
                    </h1>
                    <div class="w-full h-px bg-gray-200 mb-6"></div>
                    <p class="text-gray-600 leading-relaxed max-w-2xl">
                        Jika Anda memiliki pertanyaan lebih lanjut mengenai LSP Signal Informatika 
                        Teknindo atau program yang kami tawarkan, silahkan menghubungi kami:
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6 mb-8">
                    <!-- Phone -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-6 h-6 text-cyan-400">
                                <svg fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="text-gray-900 font-semibold text-lg">+62 858-8556-4596</span>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-6 h-6 text-cyan-400">
                                <svg fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="text-gray-900 font-semibold text-lg">admin@lspsignal.id</span>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-6 h-6 text-cyan-400">
                                <svg fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="text-gray-900 font-semibold text-lg leading-relaxed">
                            Plaza Indah Bogor Blok.B2, Jl. Sholeh Iskandar, RT.04/RW.09, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164
                        </span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/6285885564596" target="_blank" 
                       class="inline-flex items-center justify-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.891 3.686"/>
                        </svg>
                        Hubungi via WhatsApp
                    </a>

                    <!-- Email Button -->
                    <a href="mailto:admin@lspsignal.id" 
                       class="inline-flex items-center justify-center px-6 py-3 bg-cyan-400 hover:bg-cyan-500 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        Kirim Pesan
                    </a>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-cyan-100 to-cyan-200 rounded-full opacity-20"></div>
                <div class="absolute bottom-4 left-4 w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-full opacity-20"></div>
            </div>
        </div>
    </div>
</div>

@endsection