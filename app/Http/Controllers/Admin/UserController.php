<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Role;
use App\Group;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
       public function create(){
        return view('admin.users.create');
    }

    public function registered()
    {
        $users = User::all();
        return view('admin.users.index')->with('users',$users);
    }

    public function store(Request $request)
    {
        $users = new User;
        $users->firstname = $request->input('firstname');
        $users-> lastname= $request->input('lastname');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        $users->role=$request->input('role');
        $users->group=$request->input('group');

        $users->save();
        return redirect ('/users')->with('status','New User is added');
    }
    public function actor(Request $request, $id)
    {
        $users = User::findorfail($id);
        return view('admin.actor')->with('users',$users);
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
        $users->usertype = $request->input('usertype');
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
    public function viewroles()
    {
        $roles = Role::all();
        return view('admin.roles')->with('roles',$roles);
    }

    public function viewgroups()
    {
        $groups = Group::all();
        return view('admin.groups')->with('groups',$groups);
    }
public function showactors($id)
{
    $role_user = User::where('role',$id)->get();
$id_= $id;
    return view('admin.role',compact('role_user','id_'));
}



}
