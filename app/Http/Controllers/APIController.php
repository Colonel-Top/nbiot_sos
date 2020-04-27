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
        $device_id = $request['deviceid'];

        $search = Device::all();
        $flag = 0;
        foreach ($search as $item) {

            if ($item->device_id == $device_id) {
                $search = $item;
                $flag = 1;
                break;
            }

        }

        if (is_null($search) or $flag == 0)
            return response()->json(['error' => 'Device Not Found in DB Please Add New device'], 500);


        $alarm = [];
        $alarm['device_id'] = $search->id;
        $alarm['stage'] = $request['state'];
        $alarm = Alarm::Create($alarm);
        $fp = fopen('lidn.txt', 'w');
        fwrite($fp, json_encode($alarm));
        fclose($fp);

        return response()->json(['success' => 'Data recorded'], 200);
    }
}