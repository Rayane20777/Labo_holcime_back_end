<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matiere extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'matieres';


    protected $fillable = [
        'nom',
        'destination_id',
        'point_echantillonage_id'
    ];


    public function destination() :HasMany {
        return $this->hasMany(Destination::class);
    }

    public function point_echantillonage() :HasMany {
        return $this->hasMany(PointEchantillonage::class);
    }

    public function analyse() : HasMany {
        return $this->hasMany(Analyse::class);
    }

}
