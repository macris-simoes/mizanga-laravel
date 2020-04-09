<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractEvaluations extends Model
{
    protected $fillable = ["rate_work","include_evaluation"];
}
