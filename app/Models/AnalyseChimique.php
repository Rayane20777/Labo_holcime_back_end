<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnalyseChimique extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $fillable = [
        'addition',
        '2-32µm ',
        '>45µm ',
        '>80µm ',
        'SSB',
        'insoluble',
        'SiO2',
        'Al2O3',
        'Fe2O3',
        'CaO',
        'MgO',
        'SO3',
        'K2O',
        'Na2O',
        'P2O5',
        'CO2',
        'PF',
        'Cl',
        'H41',
        'S2-',
        'CaOl',
        'analyse_id'
    ];

}
