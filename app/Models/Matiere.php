<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matiere extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nom',
        'destination_id',
        'point_echantillonage_id'
    ];


    public function destination() :BelongsTo {
        return $this->belongsTo(Destination::class);
    }

    public function point_echantillonage() :BelongsTo {
        return $this->belongsTo(PointEchantillonage::class);
    }

    public function analyse() : HasMany {
        return $this->hasMany(Analyse::class);
    }

}
