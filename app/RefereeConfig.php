<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AxisReferee;
use App\AbstractEvaluation;
use App\User;
use App\Admin;

class RefereeConfig extends Model
{
    protected $fillable = ['appraiser_cpf', 'appraiser_name', 'appraiser_email', 'user_id', 'admin_id'];

    public function axis_referees(){
        return $this->hasMany(AxisReferee::class);
    }

    public function abstract_evauations(){
        return $this->hasMany(AbstractEvaluation::class);
    }

    public function users(){
        return $this->hasOne(User::class);
    }

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

}