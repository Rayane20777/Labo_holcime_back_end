<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Xrf>
 */
class XrfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'SiO2'=> fake()->randomfloat(2, 10, 1000),
            'Al2O3'=> fake()->randomfloat(2, 10, 1000),
            'Fe2O3'=> fake()->randomfloat(2, 10, 1000),
            'CaO'=> fake()->randomfloat(2, 10, 1000),
            'SO3'=> fake()->randomfloat(2, 10, 1000),
            'MgO'=> fake()->randomfloat(2, 10, 1000),
            'K2O'=> fake()->randomfloat(2, 10, 1000),
            'Na2O'=> fake()->randomfloat(2, 10, 1000),
            'P2O5'=> fake()->randomfloat(2, 10, 1000),
            'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
            Analyse::factory()        ];
    }
}
