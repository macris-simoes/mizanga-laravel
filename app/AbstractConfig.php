<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\AbstractEvaluation;
use App\AbstractSubmission;

class AbstractConfig extends Model
{
    protected $fillable = ['work_modality', 'work_start_date', 'work_end_date', 'coauthor_quantity', 'queue','abstract_title_min_char','abstract_title_max_char','abstract_min_char','abstract_max_char','author_instructions','admin_id'];    

    public function admins(){
        return $this->belongsTo(Admin::class);
    }

    public function abstract_evaluations(){
        return $this->hasMany(AbstractEvaluation::class);
    }   

    public function abstract_submissions(){
        return $this->hasMany(AbstractSubmission::class);
    }
}
