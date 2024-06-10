<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proportion>
 */
class ProportionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'KK_G'=> fake()->randomfloat(2, 10, 1000),
        'CAL_G'=> fake()->randomfloat(2, 10, 1000),
        'CV_G'=> fake()->randomfloat(2, 10, 1000),
        'LAIT_G'=> fake()->randomfloat(2, 10, 1000),
        'GYPSE'=> fake()->randomfloat(2, 10, 1000),
        'KK_NG'=> fake()->randomfloat(2, 10, 1000),
        'CAL_NG'=> fake()->randomfloat(2, 10, 1000),
        'CV_NG'=> fake()->randomfloat(2, 10, 1000),
        'LAIT_NG'=> fake()->randomfloat(2, 10, 1000),
        '∑_Gypse'=> fake()->randomfloat(2, 10, 1000),
        'analyse_id'  => Analyse::query()->inRandomOrder()->first()?->id ?? 
        Analyse::factory()
        ];
    }
}
