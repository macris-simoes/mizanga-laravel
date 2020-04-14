<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConferenceConfig extends Model
{
    protected $fillable = ['name_conference', 'promoting_entity', 'primary_email', 'event_start_date', 'event_end_date', 'how_to_subscribe', 'referee_instructions', 'admin_id'];
}
