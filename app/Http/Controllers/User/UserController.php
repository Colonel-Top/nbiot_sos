<?php


namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\User;
use App\Device;
use Auth;
use Illuminate\Http\Request;
use Session;
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

    public function showedit()
    {
        if(Auth::check()) {
            $user = Auth::user();

            return view('user.edit', ['user' => $user]);
        }
        else{
            return redirect()->intended(route('/'));
        }
    }

    public function update(Request $req)
    {

        $search = User::findOrFail($req->id);
        $search->name = $req->name;
        $search->email = $req->email;
//        $search->role = $req->role;

        if (!empty($req['password']) || !empty($req['password_confirmation']))
        {
            if ($req['password'] != $req['password_confirmation'])
            {
                Session::flash('error', 'Password & Password Confirm Not match');

                return view('user.edit', ['user' => $search]);
            }
            else
            {
                $hashpass = bcrypt($req->password);
                $search->password = $hashpass;
            }
        }

        $search->save();
//dd($search);
        Session::flash('success', "Update Profie $search->name Successfully");
        return redirect()->intended(route('home'));
    }
}