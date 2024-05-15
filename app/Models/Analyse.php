<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Analyse extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'date_prelevement',
        'date_gachage'
    ];

    public function matiere() : BelongsTo {
        return $this->belongsTo(Matiere::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function analyse_chimique() : HasOne {
        return $this->hasOne(AnalyseChimique::class);
    }

    public function proportion() : HasOne {
        return $this->hasOne(Proportions::class);
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

    public function lpee() : HasOne {
        return $this->hasOne(Lpee::class);
    }


}