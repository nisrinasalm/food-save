<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Makanan::create([
            'nama' => 'Nasi Goreng',
            'kategori' => 'Makanan Utama',
            'lokasi' => 'Jakarta',
            'status' => 'available',
        ]);
        Makanan::create([
            'nama' => 'Sate Ayam',
            'kategori' => 'Makanan Utama',
            'lokasi' => 'Bandung',
            'status' => 'available',
        ]);
    }
}
