<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matiere>
 */
class MatiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->randomElement(['CPZA55','PMES','PERFECTO','J55','J45','J35','PMVC','CPJ35']),
        ];
    
    }
}
