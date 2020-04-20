<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class ConferenceConfig extends Model
{
    protected $fillable = ['name_conference', 'promoting_entity', 'primary_email', 'event_start_date', 'event_end_date', 'how_to_subscribe', 'referee_instructions', 'admin_id'];


    public function admins(){
        return $this->belongsTo(Admin::class);
    }
}
