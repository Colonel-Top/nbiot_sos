<?php


namespace App\Http\Controllers\Device;

use App\Http\Controllers\Controller;
use App\User;
use App\Device;
use Auth;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user()->name;

            return $next($request);
        });
    }

    public function showedit($id)
    {
        $device = Device::findOrFail($id);
        $url = "https://www.google.com/maps?q=" . $device->device_lat . "," . $device->device_long;

        return view('device.edit', ['device' => $device, 'url' => $url]);
    }

    public function update(Request $req)
    {

        $search = Device::findOrFail($req->id);
        $search->name = $req->name;
        $search->device_id = $req->device_id;
        $search->description = $req->description;
        $search->device_lat = $req->device_lat;
        $search->device_long = $req->device_long;
        $search->save();
        if (!empty($req->image1) and $req->image1 != null) {
            if (!empty($search->image1) and $search->image1 != null)
                unlink($search->image1);
            $file = ($req->image1);
//                    dd($photo);
            $filename = $file->getClientOriginalName();
            $filename = str_replace(' ', '', $filename);
            echo($filename);
            $path = $file->storeAs("/public/device/$search->id", $filename);
            $path = str_replace('public', 'storage', $path);
            $search->image1 = $path;
            $search->save();
        }

        if (!empty($req->image2) and $req->image2 != null) {
            if (!empty($search->image2) and $search->image2 != null)
                unlink($search->image2);
            $file = ($req->image2);
//                    dd($photo);
            $filename = $file->getClientOriginalName();
            $filename = str_replace(' ', '', $filename);
            $path = $file->storeAs("/public/device/$search->id", $filename);
            $path = str_replace('public', 'storage', $path);
            $search->image2 = $path;
            $search->save();

        }
        if (!empty($req->image3) and $req->image3 != null) {
            if (!empty($search->image3) and $search->image3 != null)
                unlink($search->image3);
            $file = ($req->image3);
//                    dd($photo);
            $filename = $file->getClientOriginalName();
            $filename = str_replace(' ', '', $filename);
            $path = $file->storeAs("/public/device/$search->id", $filename);
            $path = str_replace('public', 'storage', $path);
            $search->image3 = $path;
            $search->save();

        }


        Session::flash('success', "Update Device $search->name Successfully");
        return redirect()->intended(route('device.management'));
    }

    public function delete($id)
    {
        $search = Device::findOrFail($id);
        $sen = $search->device_id;
        $senname = $search->name;
        $search->alarms()->delete();

        $img1 = $search->image1;

        $img2 = $search->image2;

        $img3 = $search->image3;
        if (!empty($search->image1) and $search->image1 != null)
            unlink($img1);
        if (!empty($search->image2) and $search->image2 != null)
            unlink($img2);
        if (!empty($search->image3) and $search->image3 != null)
            unlink($img3);
        $search->delete();
        Session::flash('success', "Remove Device $senname Successfully");


        return redirect()->intended(route('device.management'));
    }

    public function deleteimg($id, $img)
    {
//        dd($img);
        $search = Device::findOrFail($id);
        switch ($img) {
            case 1:
                if (!empty($search->image1) and $search->image1 != null)
                    unlink($search->image1);
                $search->image1 = null;
                $search->save();
                break;
            case 2:
                if (!empty($search->image2) and $search->image2 != null)
                    unlink($search->image2);
                $search->image1 = null;
                $search->save();
                break;
            case 3:
                if (!empty($search->image3) and $search->image3 != null)
                    unlink($search->image3);
                $search->image1 = null;
                $search->save();
                break;
            case 4:
                Session::flash('error', "Remove Device $search->name Image FAILD");
                return redirect()->intended(route('device.management'));
        }


        Session::flash('success', "Remove Device $search->name Image Successfully");


        return redirect()->intended(route('device.management'));
    }

    public function add(Request $req)
    {

//        dd($req);
        $findme = Device::where('device_id', $req->device_id)->get()->first();
        if (!is_null($findme)) {
            Session::flash('error', "Sensor ID $req->sensor_id is Exists with Name $findme->name so we can't process your request");
            return redirect()->intended(route('device.management'));
        }
        $newsen = Device::Create($req->except('image1', 'image2', 'image3'));

        if (!empty($req->image1) and $req->image1 != null) {

            $file = ($req->image1);
//                    dd($photo);
            $filename = $file->getClientOriginalName();

            $path = $file->storeAs("/public/device/$newsen->id", $filename);
            $path = str_replace('public', 'storage', $path);
            $newsen->image1 = $path;
            $newsen->save();
        }

        if (!empty($req->image2) and $req->image2 != null) {

            $file = ($req->image2);
//                    dd($photo);
            $filename = $file->getClientOriginalName();

            $path = $file->storeAs("/public/device/$newsen->id", $filename);
            $path = str_replace('public', 'storage', $path);
            $newsen->image2 = $path;
            $newsen->save();

        }
        if (!empty($req->image3) and $req->image3 != null) {
            $file = ($req->image3);
//                    dd($photo);
            $filename = $file->getClientOriginalName();

            $path = $file->storeAs("/public/device/$newsen->id", $filename);
            $path = str_replace('public', 'storage', $path);
            $newsen->image3 = $path;
            $newsen->save();

        }
        \


        Session::flash('success', "Device $newsen->name has implemented successfully");
        return redirect()->intended(route('device.management'));
    }
}