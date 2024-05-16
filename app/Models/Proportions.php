<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proportions extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'proportions';


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
