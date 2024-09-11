<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Mufiddin',
            'email' => 'mufiddin@laravel-api.com',
            'password' => Hash::make('lalalala'),
            'email_verified_at' => now(),
        ]);
    }
}