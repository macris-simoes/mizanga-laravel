<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\Registration;


class AttendeeConfig extends Model
{
    protected $fillable=['register_modality', 'register_start_date', 'register_end_date','attach_receipt', 'admin_id','register_fee'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}


