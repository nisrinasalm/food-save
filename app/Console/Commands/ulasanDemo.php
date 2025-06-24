<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Ulasan\PengisiUlasan;

class UlasanDemo extends Command
{
    protected $signature = 'demo:ulasan';
    protected $description = 'Demo Template Method Pattern untuk ulasan di terminal';

    public function handle()
    {
        $this->info('Demo: Pengguna pertama kali transaksi');
        $ulasan1 = new PengisiUlasan(true);
        $ulasan1->berikanUlasan();

        $this->info('');
        $this->info('Demo: Pengguna transaksi kedua atau lebih');
        $ulasan2 = new PengisiUlasan(false);
        $ulasan2->berikanUlasan();

        return Command::SUCCESS;
    }
}
