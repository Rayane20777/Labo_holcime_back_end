<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhaseGachage extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'phase_gachages';


    protected $fillable = [
        'temperature',
        'temperature_salle',
        'humidite',
        'p_prisme',
        'temps_gachage',
        'temps_casse',
        'analyse_id'
    ];
}
