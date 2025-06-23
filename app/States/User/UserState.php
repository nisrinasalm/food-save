<?php

namespace App\States\User;

use App\Models\User;

interface UserState
{
    public function approve(User $user): void;
    public function reject(User $user): void;
}
