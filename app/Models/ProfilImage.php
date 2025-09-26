<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'position', // 1 for top image card, 2 for bottom image card
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePosition($query, $position)
    {
        return $query->where('position', $position);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    // Get image for top card (position 1)
    public static function getTopImage()
    {
        return self::active()->position(1)->ordered()->first();
    }

    // Get image for bottom card (position 2) 
    public static function getBottomImage()
    {
        return self::active()->position(2)->ordered()->first();
    }
}
