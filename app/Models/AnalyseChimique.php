<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnalyseChimique extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'analyse_chimiques';
    protected $fillable = [
        'finesse_2_32',
        'finesse_40',
        'finesse_80',
        'SSB',
        'insoluble',
        'CO2',
        'PF',
        'Cl',
        'H41',
        'S2',
        'CaOl',
        'analyse_id'
    ];

}
