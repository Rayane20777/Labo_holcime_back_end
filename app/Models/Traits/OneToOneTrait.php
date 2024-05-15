<?php

namespace App\Models\Traits;

use App\Models\Analyse;

trait OneToOneTrait {

    public function analyse() {
        return $this->hasOne(Analyse::class, 'id', 'analyse_id');
    }
}