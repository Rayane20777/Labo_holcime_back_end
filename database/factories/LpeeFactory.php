<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lpee>
 */
class LpeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'P_AF' => $this->faker->randomFloat(2, 0, 100), 
            'SO3' => $this->faker->randomFloat(2, 0, 100), 
            'SiO2' => $this->faker->randomFloat(2, 0, 100), 
            'Fe2O3' => $this->faker->randomFloat(2, 0, 100), 
            'Al2O3' => $this->faker->randomFloat(2, 0, 100), 
            'CaO' => $this->faker->randomFloat(2, 0, 100), 
            'MgO' => $this->faker->randomFloat(2, 0, 100), 
            'Cl' => $this->faker->randomFloat(2, 0, 100), 
            'Na2O' => $this->faker->randomFloat(2, 0, 100), 
            'K2O' => $this->faker->randomFloat(2, 0, 100), 
            'insoluble' => $this->faker->randomFloat(2, 0, 100), 
            'regulateur_de_prise' => $this->faker->randomFloat(2, 0, 100), 
            'ajout_calcaire' => $this->faker->randomFloat(2, 0, 100), 
            'teneur_en_pouzzolane' => $this->faker->randomFloat(2, 0, 100), 
            'clinker' => $this->faker->randomFloat(2, 0, 100), 
            'laitier' => $this->faker->randomFloat(2, 0, 100), 
            'sulfures' => $this->faker->randomFloat(2, 0, 100), 
            'perte_au_feu_500' => $this->faker->randomFloat(2, 0, 100), 
            'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
            Analyse::factory(),];
    }
}
