<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi', 
        'image',
        'tech_stacks',
        'status',
        'order',
        'is_active'
    ];

    public function getTechStackIconsAttribute()
    {
        // Menggunakan beberapa CDN alternatif
        $icons = [
            'Laravel' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg',
                'fallback' => 'https://laravel.com/img/logomark.min.svg',
                'color' => '#FF2D20'
            ],
            'PHP' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg',
                'fallback' => 'https://www.php.net/images/logos/new-php-logo.svg',
                'color' => '#777BB4'
            ],
            'MySQL' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg',
                'fallback' => 'https://cdn.iconscout.com/icon/free/png-256/mysql-3628940-3030165.png',
                'color' => '#4479A1'
            ],
            'PostgreSQL' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg',
                'fallback' => 'https://cdn.iconscout.com/icon/free/png-256/postgresql-226047.png',
                'color' => '#336791'
            ],
            'React' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/react.svg',
                'color' => '#61DAFB'
            ],
            'Vue.js' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/vuedotjs.svg',
                'color' => '#4FC08D'
            ],
            'Node.js' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/nodedotjs.svg',
                'color' => '#339933'
            ],
            'JavaScript' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/javascript.svg',
                'color' => '#F7DF1E'
            ],
            'TypeScript' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/typescript.svg',
                'color' => '#3178C6'
            ],
            'Python' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/python.svg',
                'color' => '#3776AB'
            ],
            'MongoDB' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/mongodb.svg',
                'color' => '#47A248'
            ],
            'Docker' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/docker.svg',
                'color' => '#2496ED'
            ],
            'TailwindCSS' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/tailwindcss.svg',
                'color' => '#06B6D4'
            ],
            'Bootstrap' => [
                'url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg',
                'fallback' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/bootstrap.svg',
                'color' => '#7952B3'
            ],
        ];
        
        $result = [];
        if ($this->tech_stacks) {
            foreach ($this->tech_stacks as $tech) {
                if (isset($icons[$tech])) {
                    $result[] = [
                        'name' => $tech,
                        'icon' => $icons[$tech]['url'],
                        'fallback' => $icons[$tech]['fallback'],
                        'color' => $icons[$tech]['color']
                    ];
                }
            }
        }
        return $result;
    }

    protected $casts = [
        'is_active' => 'boolean',
        'tech_stacks' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}