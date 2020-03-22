<?php


namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function data_incoming(Request $request)
    {
        $request = $request->json()->all();
        return response()->json(['success' => 'Data recorded','request'=>$request], 200);
        if (is_null($request))
            return response()->json(['error' => 'Not Authorized, we accept package in format only'], 555);
        $search = Device::where('device_id', $request['device_id'])->get()->first();
        if (is_null($search))
            return response()->json(['error' => 'Device Not Found in DB Please Add New device'], 500);
        dd($search);
    }
}