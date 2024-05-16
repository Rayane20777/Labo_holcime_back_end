<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResultatAnalysePhysique extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'resultat_analyse_physiques';


    protected $fillable = [
        '1j',
        '2j',
        '7j',
        '28j',
        '90j',
        'w1',
        'w2',
        'w3',
        'w4',
        'analyse_id'
    ];
}
