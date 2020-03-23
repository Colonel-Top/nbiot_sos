<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    //

    protected $fillable = ['device_id','state','id'];
    public function devices()
    {
        return $this->belongsTo('App\Device','device_id');
    }
}
