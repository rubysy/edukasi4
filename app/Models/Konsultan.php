<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultan extends Model
{
   protected $fillable = [
        'judul',
        'deskripsi',
        'image', 
    ];
}
