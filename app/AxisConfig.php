<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\AxisReferee;
use App\AbstractSubmission;
use App\AbstractEvaluation;


class AxisConfig extends Model
{
    protected $fillable = ['axis', 'admin_id'];

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function axis_referees(){
        return $this->belongsToMany(AxisReferee::class);
    }

    public function abstract_submissions(){
        return $this->hasMany(AbstractSubmission::class);
    }

    public function abstract_evaluations(){
        return $this->hasMany(AbstractEvaluation::class);
    }

}
