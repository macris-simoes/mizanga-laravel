<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractConfig extends Model
{
    protected $fillable = ['work_modality', 'work_start_date', 'work_end_date', 'coauthor_quantity', 'queue','abstract_title_min_char','abstract_title_max_char','abstract_min_char','abstract_max_char','author_instructions','admin_id'];    
}
