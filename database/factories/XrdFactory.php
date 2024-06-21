<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analyse;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Xrd>
 */
class XrdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'GOF' => fake()->randomFloat(2, 10, 1000),
            'R_wp' => fake()->randomFloat(2, 10, 1000),
            'R_exp' => fake()->randomFloat(2, 10, 1000),
            'Displacement' => fake()->randomFloat(2, 10, 1000),
            'Alite_M3' => fake()->randomFloat(2, 10, 1000),
            'Alite_M1' => fake()->randomFloat(2, 10, 1000),
            'Alite_Sum' => fake()->randomFloat(2, 10, 1000),
            'Fraction_M1' => fake()->randomFloat(2, 10, 1000),
            'Alite_CS' => fake()->randomFloat(2, 10, 1000),
            'Alite_PO' => fake()->randomFloat(2, 10, 1000),
            'Belite_beta' => fake()->randomFloat(2, 10, 1000),
            'Belite_alpha' => fake()->randomFloat(2, 10, 1000),
            'Belite_alpha_H' => fake()->randomFloat(2, 10, 1000),
            'Belite_gamma' => fake()->randomFloat(2, 10, 1000),
            'Belite_Sum' => fake()->randomFloat(2, 10, 1000),
            'Alum_cubic' => fake()->randomFloat(2, 10, 1000),
            'Alum_ortho' => fake()->randomFloat(2, 10, 1000),
            'Alum_mono' => fake()->randomFloat(2, 10, 1000),
            'Alum_Sum' => fake()->randomFloat(2, 10, 1000),
            'Ferrite' => fake()->randomFloat(2, 10, 1000),
            'Lime' => fake()->randomFloat(2, 10, 1000),
            'Portlandite' => fake()->randomFloat(2, 10, 1000),
            'fCaO_XRD' => fake()->randomFloat(2, 10, 1000),
            'Periclase' => fake()->randomFloat(2, 10, 1000),
            'Quartz' => fake()->randomFloat(2, 10, 1000),
            'Arcanite' => fake()->randomFloat(2, 10, 1000),
            'Thenardite' => fake()->randomFloat(2, 10, 1000),
            'Langbeinite' => fake()->randomFloat(2, 10, 1000),
            'Aphthitalite' => fake()->randomFloat(2, 10, 1000),
            'Gypsum' => fake()->randomFloat(2, 10, 1000),
            'Hemi_Hydrate' => fake()->randomFloat(2, 10, 1000),
            'Anhydrite' => fake()->randomFloat(2, 10, 1000),
            'Calcite' => fake()->randomFloat(2, 10, 1000),
            'Dolomite' => fake()->randomFloat(2, 10, 1000),
            'Mullite' => fake()->randomFloat(2, 10, 1000),
            'Magnetite' => fake()->randomFloat(2, 10, 1000),
            'Hematite' => fake()->randomFloat(2, 10, 1000),
            'Flyash_amorph' => fake()->randomFloat(2, 10, 1000),
            'FA_Sum' => fake()->randomFloat(2, 10, 1000),
            'Syngenite' => fake()->randomFloat(2, 10, 1000),
            'Albite' => fake()->randomFloat(2, 10, 1000),
            'Anorthite' => fake()->randomFloat(2, 10, 1000),
            'Andesine' => fake()->randomFloat(2, 10, 1000),
            'K_Feldspar' => fake()->randomFloat(2, 10, 1000),
            'Illite' => fake()->randomFloat(2, 10, 1000),
            'Feldspar_Sum' => fake()->randomFloat(2, 10, 1000),
            'SO3_XRD' => fake()->randomFloat(2, 10, 1000),
            'CO2_XRD' => fake()->randomFloat(2, 10, 1000),
            'analyse_id' => Analyse::query()->inRandomOrder()->first()?->id ??
                Analyse::factory()
        ];
    }
}
