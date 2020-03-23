<?php


namespace App\Http\Controllers\Alarm;


use App\Http\Controllers\Controller;
use App\User;
use App\Alarm;
use App\Device;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user()->name;

            return $next($request);
        });
    }

//    public function info($id)
//    {
//        $search = Device::findOrFail($id);
//        return view('device.show',['device'=>$search]);
//    }
    public function index()
    {

        $alarms = Alarm::orderBy('id','desc')->paginate(10);
        return view(' alarm.index', ['alarms' => $alarms]);
    }

    public function search(Request $request)
    {
//        dd($request);
        if ($request->ajax()) {
            $target_dev = Device::where('device_id','like','%'.$request->search.'%')->get()->first();
            $alarminfo = $target_dev->alarms()->get();
//            #$devicesinfo = Alarm::Where('name', 'like', '%' . $request->search . '%')->orWhere('device_id', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%')->orWhere('device_lat', 'like', '%' . $request->search . '%')->orWhere('device_long', 'like', '%' . $request->search . '%')->get();
            $alarmcount = $alarminfo->count();

            try {
                if ($alarmcount > 0)
                    $returnHTML = view('alarm.search', ['alarms' => $alarminfo])->render();
            } catch (\Throwable $e) {
                dd($e);
            }
            return Response($returnHTML);
        }

    }
}