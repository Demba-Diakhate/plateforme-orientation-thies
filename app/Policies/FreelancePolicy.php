<?php

namespace App\Policies;

use App\Models\User;

class FreelancePolicy
{
    public function isFreelance(User $user)
    {
        return $user->roles->contains('name', 'Freelance');
    }
}
