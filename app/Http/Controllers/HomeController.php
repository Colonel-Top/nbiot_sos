<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Device;
use Auth;
use App\Alarm;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alarm = Alarm::orderBy('id','desc')->take(1)->get()->first();

        $device = Device::findOrFail($alarm->device_id)->get()->first();

        return view('home',['device'=>$device]);
    }
}
