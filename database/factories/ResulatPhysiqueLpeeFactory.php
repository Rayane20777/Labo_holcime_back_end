<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResulatPhysiqueLpee>
 */
class ResulatPhysiqueLpeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            '1j_lpee'=> fake()->randomfloat(2, 10, 1000),
            '2j_lpee'=> fake()->randomfloat(2, 10, 1000),
            '7j_lpee'=> fake()->randomfloat(2, 10, 1000),
            '28j_lpee'=> fake()->randomfloat(2, 10, 1000),
            '90j_lpee'=> fake()->randomfloat(2, 10, 1000),
            'w1'=> fake()->randomfloat(2, 10, 1000),
            'w2'=> fake()->randomfloat(2, 10, 1000),
            'w3'=> fake()->randomfloat(2, 10, 1000),
            'w4'=> fake()->randomfloat(2, 10, 1000),
            'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
            Analyse::factory()
    
        ];
    }
}
