<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable=['register_modality','file','cpf','rg','emissor','name','birth_date','social_name','institution','education_level','grad_school','profession','filiation','job_title','expertise','location','city','uf','country','home_phone','work_phone','mobile_phone','email','accessibility','accessibility_info','gender','color','use_social_name'];

}