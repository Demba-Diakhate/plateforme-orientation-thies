<?php

namespace App\Policies;

use App\Models\User;

class EcolePolicy
{
    public function isEcoleFormation(User $user)
    {
        return $user->roles->contains('name', 'École de formation');
    }
}
