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
        'fCaO',
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
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'Displacement',
        'analyse_id'
    ];
}
