<?php

namespace App\Policies;

use App\Models\User;

class EntreprisePolicy
{
    public function isEntreprise(User $user)
    {
        return $user->roles->contains('name', 'Entreprise');
    }
}
