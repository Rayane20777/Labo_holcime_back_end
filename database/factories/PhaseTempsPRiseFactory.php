<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhaseTempsPRise>
 */
class PhaseTempsPRiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'mass_volumique'=> fake()->randomfloat(2, 10, 1000),
        'debut_de_prise'=> fake()->randomfloat(2, 10, 1000),
        'fin_de_prise'=> fake()->randomfloat(2, 10, 1000),
        'expention'=> fake()->randomfloat(2, 10, 1000),
        'eau_gach'=> fake()->randomfloat(2, 10, 1000),
        'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
        Analyse::factory()
        ];
    }
}
