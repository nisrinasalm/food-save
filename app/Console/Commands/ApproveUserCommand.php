<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Exception;

class ApproveUserCommand extends Command
{
    protected $signature = 'user:approve {id : ID pengguna}';
    protected $description = 'Menyetujui akun pengguna';

    public function handle()
    {
        $id = $this->argument('id');
        $user = User::find($id);

        if (!$user) {
            $this->error("User dengan ID $id tidak ditemukan.");
            return;
        }

        try {
            $user->setState($user->getState());
            $user->approve();
            $this->info("User '{$user->name}' telah disetujui.");
        } catch (Exception $e) {
            $this->error("Gagal menyetujui user: " . $e->getMessage());
        }
    }
}
