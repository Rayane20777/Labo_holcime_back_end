<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AnalyseChimique;
use App\Models\PhaseGachage;
use App\Models\PhaseTempsPrise;
use App\Models\ResultatAnalysePhysique;
use App\Services\Interfaces\XrfServiceInterface;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Matiere;
use App\Models\Destination;
use App\Models\PointEchantillonage;
use App\Models\Analyse;
use App\Models\Proportion;
use App\Models\Xrf;

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
        Matiere::factory(20)->create();
        Destination::factory(10)->create();
        PointEchantillonage::factory(10)->create();
        Analyse::factory(100)->create();
        AnalyseChimique::factory(200)->create();
        PhaseGachage::factory(200)->create();
        Proportion::factory(200)->create();
        PhaseTempsPrise::factory(200)->create();
        Xrf::factory(200)->create();
        ResultatAnalysePhysique::factory(200)->create();

        // \App\Models\User::factory(10)->create();

    }
}
