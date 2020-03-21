<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    //

    protected $fillable = ['device_id','state',];
    public function devices()
    {
        return $this->belongsTo('App\Device','alarms_id','device_id');
    }
}
