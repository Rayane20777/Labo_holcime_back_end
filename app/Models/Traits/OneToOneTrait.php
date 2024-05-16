<?php

namespace App\Models\Traits;

use App\Models\Analyse;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait OneToOneTrait {

    public function analyse() : BelongsTo {
        return $this->belongsTo(Analyse::class, 'id', 'analyse_id');
    }
}