<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lms;

class LmsController extends Controller
{
    public function index()
    {
        // Get text content (narasi)
        $textContent = Lms::getTextContent();
        
        // Get image content
        $imageContent = Lms::getImageContent();
        
        return view('layanan.lms', compact('textContent', 'imageContent'));
    }
}