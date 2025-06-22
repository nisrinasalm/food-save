<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\HalamanUtama;

class CariMakananDenganBuilder extends Command
{
    protected $signature = 'makanan:cari 
                            {--lokasi= : Lokasi makanan} 
                            {--kategori= : Kategori makanan}';

    protected $description = 'Cari makanan dengan filter';

    public function handle()
    {
        $filter = [];

        if ($this->option('lokasi')) {
            $filter['lokasi'] = $this->option('lokasi');
        }

        if ($this->option('kategori')) {
            $filter['kategori'] = $this->option('kategori');
        }

        $view = new HalamanUtama();
        $view->cariMakananDenganBuilder($filter);
    }
}
