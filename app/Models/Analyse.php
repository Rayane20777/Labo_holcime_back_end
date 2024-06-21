<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Analyse extends Model
{
    use HasFactory,SoftDeletes;


    protected $table = 'analyses';
    protected $fillable = [
        'date_prelevement',
        'date_gachage',
        // 'status',
        'matiere_id',
        'destination_id',
        'point_echantillonage_id',
        'user_id'
    ];

    public function matiere() : BelongsTo {
        return $this->belongsTo(Matiere::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function point_echantillonage() : BelongsTo {
        return $this->belongsTo(PointEchantillonage::class);
    }

    public function destination() : BelongsTo {
        return $this->belongsTo(Destination::class);
    } 

    public function analyse_chimique() : HasOne {
        return $this->hasOne(AnalyseChimique::class);
    }

    public function proportion() : HasOne {
        return $this->hasOne(Proportion::class);
    }

    public function phase_gachage() : HasOne {
        return $this->hasOne(PhaseGachage::class);
    }

    public function phase_temps_prise() : HasOne {
        return $this->hasOne(PhaseTempsPrise::class);
    }

    public function resultat_analyse_physique() : HasOne {
        return $this->hasOne(ResultatAnalysePhysique::class);
    }

    public function xrf() : HasOne {
        return $this->hasOne(Xrf::class);
    }

    public function xrd() : HasOne {
        return $this->hasOne(Xrd::class);
    }

    public function lpee() : HasOne {
        return $this->hasOne(Lpee::class);
    }

    protected static function booted()
    {
        static::deleting(function ($analyse) {
            if ($analyse->isForceDeleting()) {
                $analyse->analyse_chimique()->withTrashed()->forceDelete();
                $analyse->proportion()->withTrashed()->forceDelete();
                $analyse->phase_gachage()->withTrashed()->forceDelete();
                $analyse->phase_temps_prise()->withTrashed()->forceDelete();
                $analyse->resultat_analyse_physique()->withTrashed()->forceDelete();
                $analyse->xrf()->withTrashed()->forceDelete();
                $analyse->xrd()->withTrashed()->forceDelete();
                $analyse->lpee()->withTrashed()->forceDelete();
            } else {
                $analyse->analyse_chimique()->delete();
                $analyse->proportion()->delete();
                $analyse->phase_gachage()->delete();
                $analyse->phase_temps_prise()->delete();
                $analyse->resultat_analyse_physique()->delete();
                $analyse->xrf()->delete();
                $analyse->xrd()->delete();
                $analyse->lpee()->delete();
            }
        });

        static::restoring(function ($analyse) {
            $analyse->analyse_chimique()->withTrashed()->restore();
            $analyse->proportion()->withTrashed()->restore();
            $analyse->phase_gachage()->withTrashed()->restore();
            $analyse->phase_temps_prise()->withTrashed()->restore();
            $analyse->resultat_analyse_physique()->withTrashed()->restore();
            $analyse->xrf()->withTrashed()->restore();
            $analyse->xrd()->withTrashed()->restore();
            $analyse->lpee()->withTrashed()->restore();
        });

}
}
