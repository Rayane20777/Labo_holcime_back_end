<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Matiere;
use App\Models\PointEchantillonage;
use App\Models\Destination;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analyse>
 */
class AnalyseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_gachage' => fake()->date(),
            'date_prelevement' => fake()->date(),
            // 'status' => fake()->randomElement(['pending','locked']),
            "matiere_id" => Matiere::query()->inRandomOrder()->first()?->id ?? 
            Matiere::factory(),
            "point_echantillonage_id" => PointEchantillonage::query()->inRandomOrder()->first()?->id ?? 
            PointEchantillonage::factory(),
            "destination_id" => Destination::query()->inRandomOrder()->first()?->id ?? 
            Destination::factory(),
            "user_id" => User::query()->inRandomOrder()->first()?->id ?? 
            User::factory(),
        ];
    }
}
