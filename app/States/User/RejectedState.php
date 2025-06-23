<?php

namespace App\States\User;

use App\Models\User;

class RejectedState implements UserState
{
    public function approve(User $user): void
    {
        throw new \Exception('Cannot approve a rejected user.');
    }

    public function reject(User $user): void
    {
        throw new \Exception('User already rejected.');
    }
}
