<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\LihatDaftarMakanan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('makanan:lihat', function () {
    (new LihatDaftarMakanan)->handle();
})->purpose('Melihat daftar makanan yang tersedia');