<?php

namespace App\Services;

interface UserInterface
{
    public function getNama(): string;
    public function kirimPesan(string $pesan, string $penerimaNama);
    public function terimaPesan(string $pengirim, string $pesan);
}
