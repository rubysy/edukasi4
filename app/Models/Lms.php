<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lms extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', // 'text' or 'image'
        'title',
        'content', // untuk narasi text
        'image', // untuk image path
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

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    protected static function boot()
    {
        parent::boot();

        // Validasi sebelum create - cegah multiple text content
        static::creating(function ($lms) {
            if ($lms->type === 'text') {
                $existingTextContent = self::where('type', 'text')->exists();
                if ($existingTextContent) {
                    throw new \Exception('Hanya diperbolehkan satu konten Narasi/Text. Silakan edit yang sudah ada atau hapus terlebih dahulu.');
                }
            }
        });

        // Validasi sebelum update - pastikan tidak mengubah type jika akan menyebabkan duplikasi
        static::updating(function ($lms) {
            if ($lms->type === 'text' && $lms->isDirty('type')) {
                $existingTextContent = self::where('type', 'text')
                    ->where('id', '!=', $lms->id)
                    ->exists();
                if ($existingTextContent) {
                    throw new \Exception('Hanya diperbolehkan satu konten Narasi/Text.');
                }
            }
        });
    }

    // TAMBAHKAN METHOD INI:
    
    // Get text content
    public static function getTextContent()
    {
        return self::active()->byType('text')->ordered()->first();
    }

    // Get image content
    public static function getImageContent()
    {
        return self::active()->byType('image')->ordered()->get();
    }
}