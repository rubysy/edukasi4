<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kolaborasi;

class HomeController extends Controller
{
    public function index()
    {
        $kolaborasiPerusahaan = Kolaborasi::where('kategori', 'perusahaan')->get();
        $kolaborasiAkademisi = Kolaborasi::where('kategori', 'akademisi')->get();
        return view('home', compact('kolaborasiPerusahaan', 'kolaborasiAkademisi'));
    }
}