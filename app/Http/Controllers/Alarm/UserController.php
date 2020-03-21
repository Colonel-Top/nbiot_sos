<?php


namespace App\Http\Controllers\Device;


use App\Http\Controllers\Controller;
use App\User;
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

    public function info($id)
    {
        $search = Device::findOrFail($id);
        return view('device.show',['device'=>$search]);
    }
    public function index()
    {

        $devices = Device::paginate(10);
        return view(' device.index', ['devices' => $devices]);
    }

    public function search(Request $request)
    {
//        dd($request);
        if ($request->ajax()) {
            $devicesinfo = Device::Where('name', 'like', '%' . $request->search . '%')->orWhere('device_id', 'like', '%' . $request->search . '%')->orWhere('description', 'like', '%' . $request->search . '%')->orWhere('device_lat', 'like', '%' . $request->search . '%')->orWhere('device_long', 'like', '%' . $request->search . '%')->get();
            $devicecount = $devicesinfo->count();

            try {
                if ($devicecount > 0)
                    $returnHTML = view('device.search', ['devices' => $devicesinfo])->render();
            } catch (\Throwable $e) {
                dd($e);
            }
            return Response($returnHTML);
        }

    }
}