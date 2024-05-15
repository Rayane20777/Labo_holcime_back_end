<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proportions extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $fillable = [
        'KK_G',
        'CAL_G',
        'CV_G',
        'LAIT_G',
        'GYPSE',
        'KK_NG',
        'CAL_NG',
        'CV_NG',
        'LAIT_NG',
        '∑_Gypse ',
        'analyse_id '
    ];
}