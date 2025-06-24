<?php

namespace App\Services;

use App\Contracts\ChatRoomInterface;

class ConcreteUser implements UserInterface
{
    private string $nama;
    private ChatRoomInterface $mediator;

    public function __construct(string $nama, ChatRoomInterface $mediator)
    {
        $this->nama = $nama;
        $this->mediator = $mediator;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function kirimPesan(string $pesan, string $penerimaNama)
    {
        $this->mediator->kirimPesan($this, $pesan, $penerimaNama);
    }

    public function terimaPesan(string $pengirim, string $pesan)
    {
        echo "Pesan dari $pengirim: $pesan\n";
    }
}
