<?php

namespace App\States\User;

use App\Models\User;
use App\States\User\VerifiedState;
use App\States\User\RejectedState;

class UnverifiedState implements UserState
{
    public function approve(User $user): void
    {
        $user->status = 'verified';
        $user->save();
        $user->setState(new VerifiedState());
    }

    public function reject(User $user): void
    {
        $user->status = 'rejected';
        $user->save();
        $user->setState(new RejectedState());
    }
}
