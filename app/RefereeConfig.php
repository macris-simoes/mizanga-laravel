<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefereeConfig extends Model
{
    protected $fillable = ['appraiser_cpf', 'appraiser_name', 'appraiser_email', 'user_id', 'admin_id'];
}