<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@edukasi4.id'], // ganti sesuai email lo
            [
                'name' => 'Administrator',
                'password' => Hash::make('admin123'), // ganti sebelum produksi
                'email_verified_at' => now(),
            ]
        );
    }
}
