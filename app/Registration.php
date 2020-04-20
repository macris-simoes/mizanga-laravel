<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AttendeeConfig;
use App\AbstractSubmission;
use App\AbstractEvaluation;
use App\User;

class Registration extends Model
{
    protected $fillable=['register_modality','file','cpf','rg','emissor','name','birth_date','social_name','institution','education_level','grad_school','profession','filiation','job_title','expertise','location','city','uf','country','home_phone','work_phone','mobile_phone','email','accessibility','accessibility_info','gender','color','use_social_name','user_id'];

    public function atendee_configs(){
        return $this->belongsTo(AttendeeConfig::class);
    }

    public function abstract_submissions(){
        return $this->hasMany(AbstractSubmission::class);
    }

    public function abstract_evaluations(){
        return $this->hasMany(AbstractEvaluation::class);
    }   

    public function users(){
        return $this->hasOne(User::class);
    }

}