<?php

namespace App\States\User;

use App\Models\User;

class VerifiedState implements UserState
{
    public function approve(User $user): void
    {
        throw new \Exception('User already verified.');
    }

    public function reject(User $user): void
    {
        throw new \Exception('Cannot reject a verified user.');
    }
}
