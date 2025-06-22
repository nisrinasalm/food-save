<?php
namespace App\Builders;

use App\Models\Makanan;

class MakananQueryBuilder
{
    protected ?string $lokasi = null;
    protected ?string $kategori = null;

    public function setLokasi(string $lokasi): self
    {
        $this->lokasi = $lokasi;
        return $this;
    }

    public function setKategori(string $kategori): self
    {
        $this->kategori = $kategori;
        return $this;
    }

    public function get(): array
    {
        $query = Makanan::query()->where('status', 'available');

        if ($this->lokasi) {
            $query->where('lokasi', $this->lokasi);
        }

        if ($this->kategori) {
            $query->where('kategori', $this->kategori);
        }

        return $query->get()->toArray();
    }
}
