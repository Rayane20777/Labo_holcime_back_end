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

    protected $table = 'destinations';


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

    protected static function booted()
    {
        static::deleting(function ($destination) {
            if ($destination->isForceDeleting()) {
                $destination->analyse()->withTrashed()->forceDelete();
            } else {
                $destination->analyse()->delete();
            }
        });

        static::restoring(function ($destination) {
            $destination->analyse()->withTrashed()->restore();
        });
    }

}
