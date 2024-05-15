<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhaseTempsPrise extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $fillable = [
        'mass_volumique',
        'debut_de_prise',
        'fin_de_prise',
        'expention',
        'eau_gach',
        'analyse_id'
    ];
}
