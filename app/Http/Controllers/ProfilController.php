<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilImage;

class ProfilController extends Controller
{
    public function index()
    {
        //images for each card nya
        $topImage = ProfilImage::getTopImage();
        $bottomImage = ProfilImage::getBottomImage();

        return view('profil', compact('topImage', 'bottomImage'));
    }
}