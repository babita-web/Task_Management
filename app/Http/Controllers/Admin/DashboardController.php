<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function edit(Request $request, $id)
    {
        $users = User::findorfail($id);
        return view('admin.edit')->with('users',$users);
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $users->role = $request->input('role');
        $users->group = $request->input('group');
        $users->update();

        return redirect ('/users')->with('status','your data is edited');
    }

    public function delete($id)
    {
        $users = User::findorfail($id);
        $users->delete();
        return redirect ('/users')->with('status','your data is deleted');

    }


}
