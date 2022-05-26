<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
Use DB;


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
        return view('index');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data = User::all();
        $data1 = Usertype::all();
        return view('main.index', compact('data','data1'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminAdd(Request $request)
    {
        //dd($request);
        
        $users = new User;
        $users->name = $request->input('firstName');
        $users->lname = $request->input('lastName');
        $users->email = $request->input('email');
        
        $users->password = bcrypt($request->input('password'));
        $users->permission = $request->input('permission');
        $users->address = $request->input('address');
        
        //dd($users);
        $users->save();
        return redirect()->back()->with('success','insert completed');
    }
}
