<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ChatMediator;
use App\Services\ConcreteUser;

class ChatMediatorDemo extends Command
{
    protected $signature = 'demo:chat';
    protected $description = 'Demo Mediator Pattern via terminal';

    public function handle()
    {
        $mediator = new ChatMediator();

        $user1 = new ConcreteUser("Rafa", $mediator);
        $user2 = new ConcreteUser("Hana", $mediator);

        $mediator->daftarUser($user1);
        $mediator->daftarUser($user2);

        $user1->kirimPesan("Hai Hana, gimana kabarnya?", "Hana");
        $user2->kirimPesan("Baik Rafa, kamu sendiri gimana?", "Rafa");

        return Command::SUCCESS;
    }
}
