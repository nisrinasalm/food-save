<?php

namespace App\Http\Controllers;

use App\Observers\ObserverInterface;

class HalamanUtama implements ObserverInterface
{
    public function update(array $data)
    {
        $this->tampilkanDaftarMakanan($data);
    }

    public function tampilkanDaftarMakanan(array $data)
    {
        if (count($data) > 0) {
            echo "Daftar Makanan Tersedia:\n";
            foreach ($data as $makanan) {
                echo "- {$makanan['nama']} ({$makanan['kategori']}) di {$makanan['lokasi']} dengan status {$makanan['status']}\n";
            }
        } else {
            echo "Tidak ada makanan yang tersedia saat ini.\n";
        }
    }

    public function cariMakananDenganBuilder(array $filter)
    {
        $controller = new MakananController();
        $daftar = $controller->requestMakananDenganFilter($filter);

        if (count($daftar) > 0) {
            echo "Hasil pencarian makanan:\n";
            foreach ($daftar as $makanan) {
                echo "- {$makanan['nama']} ({$makanan['kategori']}) di {$makanan['lokasi']}\n";
            }
        } else {
            echo "Tidak ada makanan yang tersedia dengan filter tersebut.\n";
        }
    }

}
