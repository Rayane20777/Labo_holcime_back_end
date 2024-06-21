<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Xrd extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'xrds';
    protected $fillable = [
        'GOF',
        'R_wp',
        'R_exp',
        'Displacement',
        'Alite_M3',
        'Alite_M1',
        'Alite_Sum',
        'Fraction_M1',
        'Alite_CS',
        'Alite_PO',
        'Belite_beta',
        'Belite_alpha',
        'Belite_alpha_H',
        'Belite_gamma',
        'Belite_Sum',
        'Alum_cubic',
        'Alum_ortho',
        'Alum_mono',
        'Alum_Sum',
        'Ferrite',
        'Lime',
        'Portlandite',
        'fCaO_XRD',
        'Periclase',
        'Quartz',
        'Arcanite',
        'Thenardite',
        'Langbeinite',
        'Aphthitalite',
        'Gypsum',
        'Hemi_Hydrate',
        'Anhydrite',
        'Calcite',
        'Dolomite',
        'Mullite',
        'Magnetite',
        'Hematite',
        'Flyash_amorph',
        'FA_Sum',
        'Syngenite',
        'Albite',
        'Anorthite',
        'Andesine',
        'K_Feldspar',
        'Illite',
        'Feldspar_Sum',
        'SO3_XRD',
        'CO2_XRD',
        'analyse_id'
    ];
}
