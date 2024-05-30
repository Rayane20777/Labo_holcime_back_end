<?php

namespace Database\Factories;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination' => fake()->unique()->name(),
            "matiere_id" => Matiere::query()->inRandomOrder()->first()?->id ?? 
            Matiere::factory(),
        ];
    }
}
