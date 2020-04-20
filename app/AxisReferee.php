<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RefereeConfig;
use App\AxisConfig;

class AxisReferee extends Model
{
    protected $fillable = ['referee_id', 'axis_id'];

    public function referee_configs(){
        return $this->belongsTo(RefereeConfig::class);
    }

    public function axis_configs(){
        return $this->belongsTo(AxisConfig::class);
    }

}
