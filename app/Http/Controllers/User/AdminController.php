<?php


namespace App\Http\Controllers\User;


use App\Device;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;
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

    public function index()
    {

        $users = User::paginate(10);
        return view(' user.index', ['users' => $users]);
    }

    public function search(Request $request)
    {
//        dd($request);
        if ($request->ajax()) {
            $userinfo = User::Where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%')->orWhere('role', 'like', '%' . $request->search . '%')->get();
            $usercount = $userinfo->count();

            try {
                if ($usercount > 0)
                    $returnHTML = view('user.search', ['users' => $userinfo])->render();
            } catch (\Throwable $e) {
                dd($e);
            }
            return Response($returnHTML);
        }

    }
    public function showedit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $req)
    {

        $search = User::findOrFail($req->id);
        $search->name = $req->name;
        $search->email = $req->email;
        $search->role = $req->role;

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

        Session::flash('success', "Update User $search->name Successfully");
        return redirect()->intended(route('user.management'));
    }

    public function delete($id)
    {

        $cat = User::FindOrFail($id);
        $cat->delete();
        Session::flash('success',"Delete User successful");
        return redirect()->intended(route('user.management'));
    }


}