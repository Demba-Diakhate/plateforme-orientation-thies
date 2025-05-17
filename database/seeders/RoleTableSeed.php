<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Administrateur'],
            ['name' => 'Utilisateur'],
            ['name' => 'Entreprise'],
            ['name' => 'Coach'],
            ['name' => 'Freelance'],
            ['name' => 'École de formation'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }
    }
}
