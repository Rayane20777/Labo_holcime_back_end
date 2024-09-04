<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lpee extends Model
{
    use HasFactory, OneToOneTrait, SoftDeletes;

    protected $table = 'lpee';
    protected $fillable = [
        'P_AF',
        'SO3',
        'SiO2',
        'Fe2O3',
        'Al2O3',
        'CaO',
        'MgO',
        'Cl',
        'Na2O',
        'K2O',
        'insoluble',
        'regulateur_de_prise',
        'ajout_calcaire',
        'teneur_en_pouzzolane',
        'clinker',
        'laitier',
        'sulfures',
        'perte_au_feu_500',
        'analyse_id'
    ];


}
