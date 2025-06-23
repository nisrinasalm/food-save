<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ListUserCommand extends Command
{
    protected $signature = 'user:list 
                            {--status= : Filter berdasarkan status (unverified|verified|rejected)} 
                            {--peran= : Filter berdasarkan peran (pemberi|penerima)}';

    protected $description = 'Menampilkan daftar pengguna dengan filter opsional';

    public function handle()
    {
        $query = User::query();

        if ($status = $this->option('status')) {
            $query->where('status', $status);
        }

        if ($peran = $this->option('peran')) {
            $query->where('peran', $peran);
        }

        $users = $query->get(['id', 'name', 'email', 'peran', 'status']);

        if ($users->isEmpty()) {
            $this->info("Tidak ada pengguna yang ditemukan.");
            return;
        }

        $this->table(
            ['ID', 'Nama', 'Email', 'Peran', 'Status'],
            $users->toArray()
        );
    }
}
