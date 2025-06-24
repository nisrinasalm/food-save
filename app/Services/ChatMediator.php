<?php

namespace App\Services;

use App\Contracts\ChatRoomInterface;

class ChatMediator implements ChatRoomInterface
{
    private array $daftarUser = [];

    public function kirimPesan(UserInterface $pengirim, string $pesan, string $penerimaNama)
    {
        if (isset($this->daftarUser[$penerimaNama])) {
            $penerima = $this->daftarUser[$penerimaNama];
            $penerima->terimaPesan($pengirim->getNama(), $pesan);
        }
    }

    public function daftarUser(UserInterface $user)
    {
        $this->daftarUser[$user->getNama()] = $user;
        echo "User {$user->getNama()} telah bergabung ke chat.\n";
    }
}
