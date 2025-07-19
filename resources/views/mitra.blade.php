@extends('layouts.app')

@php
    use App\Models\Mitra;
    $mitras = Mitra::all();
@endphp

@section('title', 'Mitra - Edukasi4ID')

@section('content')
<div class="flex flex-col min-h-screen bg-gradient-to-br from-sky-50 via-white to-sky-50">
  <div class="max-w-6xl mx-auto px-4 py-8">
    <!-- Header -->
    <div class="text-center mb-16 p-8">
      <h1 class="text-5xl font-bold">
        <span class="text-black">Mitra</span> 
        <span class="text-[#5cc7d1]">Kami</span>
      </h1>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
  @foreach ($mitras as $mitra)
    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-start">
      {{-- Logo --}}
      @if ($mitra->logo)
        <div class="w-24 h-24 mb-4">
          <img src="{{ asset('storage/' . $mitra->logo) }}" alt="{{ $mitra->nama }}"
               class="w-full h-full object-contain">
        </div>
      @else
        <div class="w-24 h-24 bg-[#5cc7d1] rounded mb-4"></div>
      @endif

      {{-- Nama dan Deskripsi --}}
      <h2 class="text-lg font-semibold text-left">{{ $mitra->nama }}</h2>
      <p class="text-gray-600 text-sm text-left">{{ $mitra->deskripsi }}</p>
    </div>
  @endforeach
</div>

  </div>
</div>
@endsection
