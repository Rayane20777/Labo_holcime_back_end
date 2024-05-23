<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Xrf extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'xrfs';
    protected $fillable = [
        'SiO2',
        'Al2O3',
        'Fe2O3',
        'CaO',
        'SO3',
        'MgO',
        'K2O',
        'Na2O',
        'P2O5',
        'analyse_id'
    ];
}
