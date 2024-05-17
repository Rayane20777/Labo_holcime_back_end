<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'desrtinations';


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
