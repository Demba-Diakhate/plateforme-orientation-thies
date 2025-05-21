<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FormationSeeder;
use Database\Seeders\AnnuaireTableSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            FormationSeeder::class
            // RoleTableSeed::class,
            AnnuaireTableSeed::class,
            // ProfilCoachTableSeed::class,
        ]);
       
    }
}
