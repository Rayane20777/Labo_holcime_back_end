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
        'Displacement',
        'Alite_CS',
        'R_wp',
        'FA_Sum',
        'Clinker',
        'fCaO_XRD',
        'Alite_Sum',
        'Belite_Sum',
        'Alum_Sum',
        'Ferrite',
        'Gypse',
        'CALCAIRE',
        'SO3',
        'Mullite',
        'Quartz',
        'Magnetite',
        'Hematite',
        'Flyash_amorph',
        'Alite_M1',
        'Alite_M3',
        'Fraction_M1',
        'R_exp',
        'Alite_PO',
        'Belite_alpha',
        'Belite_alpha_H',
        'Belite_beta',
        'Belite_gamma',
        'Alum_cubic',
        'Alum_ortho',
        'Lime',
        'Portlandite',
        'Periclase',
        'Arcanite',
        'Aphthitalite',
        'Langbeinite',
        'Gypsum',
        'Hemi-Hydrate',
        'Anhydrite',
        'SO3_XRD',
        'CO2_XRD',
        'Syngenite',
        'Calcite',
        'Dolomite',
        'analyse_id'
    ];
}
