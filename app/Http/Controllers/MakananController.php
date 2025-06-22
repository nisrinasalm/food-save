<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Observers\SubjectInterface;
use App\Observers\ObserverInterface;
use App\Builders\MakananQueryBuilder;

class MakananController extends Controller implements SubjectInterface
{
    private $daftarMakanan = [];
    private $observers = [];

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer)
    {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->daftarMakanan);
        }
    }

    public function getMakananTersedia()
    {
        return Makanan::where('status', 'available')->get()->toArray();
    }

    public function requestDaftarMakanan()
    {
        $this->daftarMakanan = $this->getMakananTersedia();
        $this->notifyObservers();
    }
    public function requestMakananDenganFilter(array $filter)
    {
        $builder = new MakananQueryBuilder();

        if (isset($filter['lokasi'])) {
            $builder->setLokasi($filter['lokasi']);
        }

        if (isset($filter['kategori'])) {
            $builder->setKategori($filter['kategori']);
        }

        return $builder->get();
    }
}
