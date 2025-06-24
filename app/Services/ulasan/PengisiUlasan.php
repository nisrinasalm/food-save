<?php

namespace App\Services\Ulasan;

abstract class UlasanTemplate
{
    public function berikanUlasan()
    {
        $this->ulasMakanan();
        $this->ulasPemberi();
        $this->ulasAplikasi();
    }

    abstract protected function ulasMakanan();
    abstract protected function ulasPemberi();

    protected function ulasAplikasi()
    {
        // Optional: bisa override di subclass
    }
}

class PengisiUlasan extends UlasanTemplate
{
    private bool $pertamaKaliTransaksi;

    public function __construct(bool $pertamaKaliTransaksi)
    {
        $this->pertamaKaliTransaksi = $pertamaKaliTransaksi;
    }

    protected function ulasMakanan()
    {
        echo "Ulasan makanan disimpan." . PHP_EOL;
    }

    protected function ulasPemberi()
    {
        echo "Ulasan pemberi disimpan." . PHP_EOL;
    }

    protected function ulasAplikasi()
    {
        if ($this->pertamaKaliTransaksi) {
            echo "Form ulasan aplikasi muncul dan disimpan." . PHP_EOL;
        } else {
            echo "Transaksi bukan pertama kali → tidak ada ulasan aplikasi." . PHP_EOL;
        }
    }
}
