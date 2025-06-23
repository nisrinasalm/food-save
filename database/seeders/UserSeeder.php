<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nisrina',
            'email' => 'nisrina@gmail.com.com',
            'password' => Hash::make('password'),
            'peran' => 'pemberi',
            'status' => 'unverified',
        ]);

        User::create([
            'name' => 'Salma',
            'email' => 'salma@gmail.com',
            'password' => Hash::make('password'),
            'peran' => 'penerima',
            'status' => 'unverified',
        ]);

        User::create([
            'name' => 'Robbani',
            'email' => 'robbani@gmail.com',
            'password' => Hash::make('password'),
            'peran' => 'pemberi',
            'status' => 'unverified',
        ]);

        User::create([
            'name' => 'Hasna',
            'email' => 'hasna@gmail.com',
            'password' => Hash::make('password'),
            'peran' => 'penerima',
            'status' => 'unverified',
        ]);
    }
}
