<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultan;

class KonsultanController extends Controller
{
    public function index()
    {
        $konsultans = Konsultan::all();
        return view('layanan.konsultan', compact('konsultans'));
    }
}
