<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    //

    protected $fillable = ['device_id','stage','id'];
    public function devices()
    {
        return $this->belongsTo('App\Device','device_id');
    }
}
