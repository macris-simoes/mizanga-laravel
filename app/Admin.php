<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ConferenceConfig;
use App\AxisConfig;
use App\AttendeeConfig;
use App\AbstractConfig;
use App\RefereeConfig;
use App\User;

class Admin extends Model
{
    protected $fillable = ['cpf', 'name', 'email', 'user_id'];

    public function conference_configs(){
        return $this->hasMany(ConferenceConfig::class);
    }

    public function axis_configs(){
        return $this->hasMany(AxisConfig::class);
    }

    public function atendee_configs(){
        return $this->hasMany(AttendeeConfig::class);
    }

    public function abstract_configs(){
        return $this->hasMany(AbstractConfig::class);
    }

    public function referee_configs(){
        return $this->hasMany(RefereeConfig::class);
    }

    public function users(){
        return $this->hasOne(User::class);
    }

}
