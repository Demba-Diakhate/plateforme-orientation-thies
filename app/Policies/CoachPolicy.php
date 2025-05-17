<?php

namespace App\Policies;

use App\Models\User;

class CoachPolicy
{
    public function isCoach(User $user)
    {
        return $user->roles->contains('name', 'Coach');
    }
}
