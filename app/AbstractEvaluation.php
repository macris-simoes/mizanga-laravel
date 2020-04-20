<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;
use App\RefereeConfig;
use App\AbstractSubmission;
use App\AbstractConfig;

class AbstractEvaluation extends Model
{
    protected $fillable = ['rate_work','include_evaluation','registration_id','submission_id','referee_id','axis_id'];

    public function registrations(){
        return $this->belongsTo(Registration::class);
    }

    public function referee_configs(){
        return $this->belongsTo(RefereeConfig::class);
    }

    public function abstract_submissions(){
        return $this->hasOne(AbstractSubmission::class);
    }

    public function abstract_configs(){
        return $this->belongsTo(AbstractConfig::class);
    }
}
