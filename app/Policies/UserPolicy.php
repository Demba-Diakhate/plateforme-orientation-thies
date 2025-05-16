<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function isUtilisateur(User $user)
    {
        return $user->roles->contains('name', 'Utilisateur');
    }
}
