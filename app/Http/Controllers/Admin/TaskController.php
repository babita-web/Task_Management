<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    public function update(Request $request)
    {

        $tasks = new Task;
        $tasks->name = $request->input('name');
        $tasks->description = $request->input('description');
        $tasks->deadline = $request->input('deadline');
        $tasks->update();
        return redirect ('/tasks')->with('status','Task is edited');
    }
    public function store(Request $request)
    {
        $tasks = new Task;
        $tasks->name = $request->input('name');
        $tasks->description = $request->input('description');
        $tasks->deadline = $request->input('deadline');
        $tasks->actors_id = $request->input('actors_id');

        $tasks->save();
        return redirect('/tasks')->with('status', 'New Task is added');
    }

    public function assigned()
    {

        $tasks = Task::orderBy('deadline', 'ASC')->get();
        return view('admin.tasks')->with('tasks', $tasks);
    }

    public function actorassigned(Request $request,$id)
    {
        $user = User::findorfail($id);
        //$tasks = Task::orderBy('deadline', 'ASC')->get();
        return view('admin.tasks')->with('user', $user);
    }

    public function delete($id)
    {
        $tasks = Task::findorfail($id);
        $tasks->delete();
        return redirect('/tasks')->with('status', 'task is deleted');

    }

    public function createtask()
    {
        return view('admin.createtask');
    }

    public function edit(Request $request, $id)
    {
        $tasks = Task::findorfail($id);
        return view('admin.edit_task')->with('tasks', $tasks);
    }
    /*
        public function search(Request $request)
        {
            $search = $request->get('search');
            if ($search != "") {
                $tasks = Task::table('tasks')->where('name', 'like', '%' . $search . '%')
                    ->orWhere('id', 'LIKE', '%' . $search . '%')
                    ->orWhere('created_by', 'LIKE', '%' . $search . '%')
                    ->get();
                if (count($tasks) > 0)
                    return view('admin.tasks', ['tasks' => $tasks]);
            }
            return view('admin.tasks')->with('status', 'No Task Found');
        });*/

    public function totaltime(Request $request, $id)
    {
        $tasks = Task::findorfail($id);
        return view('admin.time_spent')->with('tasks', $tasks);
    }

    /*public function duration()
    {
        $start = Carbon::parse($this->created_at);
        $end = Carbon::parse($this->updated_at);
        $hours = $end->diffInHours($start);
        $seconds = $end->diffInSeconds($start);

        return $hours . ':' . $seconds;
    }*/
    public function statusfilter($id)
    {
        $status_f = Task::where('status_filter',$id)->get();
        $id_= $id;
        return view('admin.status_filter',compact('status_f','id_'));
    }

}
