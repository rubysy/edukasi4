<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::all();
        return view('mitra', compact('mitras'));
    }
}
