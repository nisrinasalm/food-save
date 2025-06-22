<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\HalamanUtama;

class LihatDaftarMakanan extends Command
{
    protected $signature = 'makanan:lihat';
    protected $description = 'Melihat daftar makanan yang tersedia';

    public function handle()
    {
        $controller = new MakananController();
        $view = new HalamanUtama();

        $controller->attach($view);
        $controller->requestDaftarMakanan();
    }
}
