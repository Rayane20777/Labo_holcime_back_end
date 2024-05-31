<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Matiere;
use App\Models\Destination;
use App\Models\PointEchantillonage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        Role::factory()->create([
            'name' => 'user',
        ]);
        Role::factory()->create([
            'name' => 'admin',
        ]);
        Role::factory()->create([
            'name' => 'super_admin',
        ]);

        User::factory(5)->create();
        Matiere::factory(10)->create();
        Destination::factory(10)->create();
        PointEchantillonage::factory(10)->create();

        // \App\Models\User::factory(10)->create();

    }
}
