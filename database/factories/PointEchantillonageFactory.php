<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PointEchantillonage;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PointEchantillonage>
 */
class PointEchantillonageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->unique()->name(),
            "matiere_id" => PointEchantillonage::query()->inRandomOrder()->first()?->id ?? 
            PointEchantillonage::factory(),
        ];
    }
}
