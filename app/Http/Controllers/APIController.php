<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Device;
use App\Alarm;
class APIController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('web');
//    }

    public function data_incoming(Request $request)
    {
        $request = $request->json()->all();
        $request = $request['Sensors'];

//dd($request);
        if (is_null($request))
            return response()->json(['error' => 'Not Authorized, we accept package in format only'], 555);
        $search = Device::where('device_id', $request['deviceid'])->get()->first();
        if (is_null($search))
            return response()->json(['error' => 'Device Not Found in DB Please Add New device'], 500);

        $alarm = new Alarm();
        $alarm->device_id = $search->id;
        $alarm->stage = $request['state'];
        $alarm->save();

        return response()->json(['success' => 'Data recorded'], 200);
    }
}