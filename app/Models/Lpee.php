<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lpee extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $table = 'lpee';


}
