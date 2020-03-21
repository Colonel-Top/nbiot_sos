<?php


namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\User;
use Auth;
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
}