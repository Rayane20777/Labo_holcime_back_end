<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnalyseChimique>
 */
class AnalyseChimiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            '2-32µm'=> fake()->randomfloat(2, 10, 1000),
            '>45µm'=> fake()->randomfloat(2, 10, 1000),
            '>80µm'=> fake()->randomfloat(2, 10, 1000),
            'SSB'=> fake()->randomfloat(2, 10, 1000),
            'insoluble'=> fake()->randomfloat(2, 10, 1000),
            'CO2'=> fake()->randomfloat(2, 10, 1000),
            'PF'=> fake()->randomfloat(2, 10, 1000),
            'Cl'=> fake()->randomfloat(2, 10, 1000),
            'H41'=> fake()->randomfloat(2, 10, 1000),
            'S2-'=> fake()->randomfloat(2, 10, 1000),
            'CaOl'=> fake()->randomfloat(2, 10, 1000),
            'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
            Analyse::factory(),
        ];
    }
}
