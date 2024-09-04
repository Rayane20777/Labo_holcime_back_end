<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AnalyseChimique;
use App\Models\PhaseGachage;
use App\Models\PhaseTempsPrise;
use App\Models\ResultatAnalysePhysique;
use App\Models\ResulatPhysiqueLpee;
use App\Models\Lpee;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Matiere;
use App\Models\Destination;
use App\Models\PointEchantillonage;
use App\Models\Analyse;
use App\Models\Proportion;
use App\Models\Xrf;
use App\Models\Xrd;

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
        Matiere::factory()->create([
            'nom' => 'CPJ65',
        ]);
        Matiere::factory()->create([
            'nom' => 'CPZA55',
        ]);
        Matiere::factory()->create([
            'nom' => 'J35',
        ]);
        Matiere::factory()->create([
            'nom' => 'J45',
        ]);
        Matiere::factory()->create([
            'nom' => 'J55',
        ]);
        Matiere::factory()->create([
            'nom' => 'PERFECTO',
        ]);
        Matiere::factory()->create([
            'nom' => 'PMES',
        ]);
        Matiere::factory()->create([
            'nom' => 'PMVC',
        ]);
        User::factory(5)->create();
        Destination::factory(100)->create();
        PointEchantillonage::factory(100)->create();
        Analyse::factory(500)->create();
        AnalyseChimique::factory(1000)->create();
        PhaseGachage::factory(1000)->create();
        Proportion::factory(1000)->create();
        PhaseTempsPrise::factory(1000)->create();
        Xrf::factory(1000)->create();
        Xrd::factory(1000)->create();
        ResultatAnalysePhysique::factory(1000)->create();
        ResulatPhysiqueLpee::factory(1000)->create();
        Lpee::factory(1000)->create();

        // \App\Models\User::factory(10)->create();

    }
}
