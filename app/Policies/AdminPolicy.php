<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    public function accessAdmin(User $user)
    {
        return $user->roles->contains('name', 'Administrateur');
    }
}
