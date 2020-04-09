<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefereeConfig extends Model
{
    protected $fillable = ['appraiser_cpf', 'appraiser_name', 'appraiser_email', 'axis_01', 'axis_02', 'axis_03', 'axis_04', 'acceptance_letter'];
}