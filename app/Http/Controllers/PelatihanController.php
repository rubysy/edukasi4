<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihans = Pelatihan::all();
        return view('layanan.pelatihan', compact('pelatihans'));
    }
}