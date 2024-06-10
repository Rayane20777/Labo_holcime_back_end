<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhaseGachage>
 */
class PhaseGachageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'temperature'=> fake()->randomfloat(2, 10, 1000),
        'temperature_salle'=> fake()->randomfloat(2, 10, 1000),
        'humidite'=> fake()->randomfloat(2, 10, 1000),
        'p_prisme'=> fake()->randomfloat(2, 10, 1000),
        'temps_gachage'=> fake()->randomfloat(2, 10, 1000),
        'temps_casse'=> fake()->randomfloat(2, 10, 1000),
        'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
            Analyse::factory()
        ];
    }
}
