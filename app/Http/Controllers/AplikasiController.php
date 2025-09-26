<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function index()
    {
        $aplikasis = Aplikasi::active()
                           ->ordered()
                           ->get();
        
        return view('layanan.aplikasi', compact('aplikasis'));
    }
}