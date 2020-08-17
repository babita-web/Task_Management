<?php

namespace App\Http\Controllers\Admin;
use App\Actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActorController extends Controller
{
    public function actor()
    {
        $users = Actor::all();
        return view('admin.actors')->with('users',$users);
    }

}
