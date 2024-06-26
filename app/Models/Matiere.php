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

    protected static function booted()
    {
        static::deleting(function ($matiere) {
            if ($matiere->isForceDeleting()) {
                $matiere->destination()->withTrashed()->forceDelete();
                $matiere->point_echantillonage()->withTrashed()->forceDelete();
                $matiere->analyse()->withTrashed()->forceDelete();
            } else {
                $matiere->destination()->delete();
                $matiere->point_echantillonage()->delete();
                $matiere->analyse()->delete();
            }
        });

        static::restoring(function ($matiere) {
            $matiere->destination()->withTrashed()->restore();
            $matiere->point_echantillonage()->withTrashed()->restore();
            $matiere->analyse()->withTrashed()->restore();
        });
    }

}
