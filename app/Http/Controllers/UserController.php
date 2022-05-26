<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::all();
        $data1 = Usertype::all();

        return view('main.index', compact('data','data1'));
    }
    public function usersList()
    {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('admin.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //dd($id);
         $users = User::find($id);

         $users->name = $request->input('firstName');
        $users->lname = $request->input('lastName');
        $users->email = $request->input('email');
        
        $users->password = bcrypt($request->input('password'));
        $users->permission = $request->input('permission');
        $users->address = $request->input('address');
        
        //dd($users);
        $users->save();
        return response()->json([
            'status' => 200,
            'message' => 'update successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //dd($id);
        User::find($id)->delete();
        return response()->json([
                'status' => 200,
                'message' => 'delete successfully',
            ]);
    }
}