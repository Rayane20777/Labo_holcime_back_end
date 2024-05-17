<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class PointEchantillonage extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'point_echantillonages';


    protected $fillable = [
        'nom',
        'matiere_id'
    ];


    public function matiere() :BelongsTo {
        return $this->belongsTo(Matiere::class);
    }

    
    public function analyse() : HasMany {
        return $this->hasMany(Analyse::class);
    }
}
