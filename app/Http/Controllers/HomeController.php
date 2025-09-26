<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kolaborasi;
use App\Models\HeroImage;


class HomeController extends Controller
{
    public function index()
    {
        $heroImages = HeroImage::active()->ordered()->get();
        $kolaborasiPerusahaan = Kolaborasi::where('kategori', 'perusahaan')->get();
        $kolaborasiAkademisi = Kolaborasi::where('kategori', 'akademisi')->get();
        return view('home', compact('heroImages', 'kolaborasiPerusahaan', 'kolaborasiAkademisi'));
    }
}