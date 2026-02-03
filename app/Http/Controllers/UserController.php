<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.index', ['users' => User::orderBy('status', 'desc')->get()]);
    }

    public function status(Request $request){
        $user = User::findOrFail($request->id);
        $user->status = $request->status;
        $user->save();

        return response()->json([
            "success" => true,
            "message" => "User status updated"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create', ['networks' => DB::table('tblnetwork')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'uname'   => 'required|string|max:255|unique:tbluser,uname',
            'pwd'     => 'required|min:6',
            'type'    => 'required|in:1,2',
            'network' => 'nullable'
        ]);

        User::create([
            'uname'   => $request->uname,
            'pwd'     => $request->pwd,
            'type'     => $request->type,
            'network' => $request->network ?? '',
            'status'  => 1
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.partials.edit-modal', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'uname' => 'required|unique:tbluser,uname,' . $request->user_id . ',id',
            'pwd' =>   'required',
            'status'=> 'required'
        ]);

        $user = User::findOrFail($request->user_id);

        $user->uname = $request->uname;
        $user->pwd = $request->pwd;
        $user->status = $request->status;
        $user->save();
        
        return response()->json([
            'success' => true,
            'message' => "User updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return response()->json([
            "success" => true,
            "message" => "User Deleted"
        ]);
    }
}
