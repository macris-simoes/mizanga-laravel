<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendeeConfig extends Model
{
    protected $fillable=['register_modality', 'register_start_date', 'register_end_date','attach_receipt', 'admin_id','register_fee'];
}
