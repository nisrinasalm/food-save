<?php

namespace App\Contracts;

use App\Services\UserInterface;

interface ChatRoomInterface
{
    public function kirimPesan(UserInterface $pengirim, string $pesan, string $penerimaNama);
    public function daftarUser(UserInterface $user);
}
