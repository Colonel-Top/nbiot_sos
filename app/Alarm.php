<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    //

    protected $fillable = ['device_id','state',];
    public function sensors()
    {
        return $this->belongsTo('App\Device','alarm_ids','device_id');
    }
}
