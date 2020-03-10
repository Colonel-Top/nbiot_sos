<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //
    protected $fillable = [
        'name','desc','device_id','device_lat','device_long','image1','image2','image3',
    ];

    public function alarms()
    {
        return $this->hasMany('App\Alarm','device_id','id');
    }
}
