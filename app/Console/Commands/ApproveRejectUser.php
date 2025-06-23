<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ApproveRejectUser extends Command
{
    protected $signature = 'user:status 
                            {id : ID user yang ingin diproses} 
                            {action : approve atau reject}';

    protected $description = 'Setujui atau tolak akun user berdasarkan ID dan status saat ini';

    public function handle()
    {
        $id = $this->argument('id');
        $action = $this->argument('action');

        $user = User::find($id);

        if (!$user) {
            $this->error("User dengan ID {$id} tidak ditemukan.");
            return;
        }

        try {
            match ($action) {
                'approve' => $user->approve(),
                'reject' => $user->reject(),
                default => throw new \InvalidArgumentException('Aksi tidak valid. Gunakan approve atau reject.'),
            };

            $this->info("User {$user->name} sekarang berstatus: {$user->status}");
        } catch (\Exception $e) {
            $this->error("Gagal memproses: " . $e->getMessage());
        }
    }
}
