<?php

use Illuminate\Support\Facades\Route;
use App\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    //Route::get('/tasks', 'Admin\TaskController@index');
    //Route::post('/tasks', 'Admin\TaskController@store');
    //Route::post('/tasks/{id}/consumptions/stop', 'ConsumptionController@stopRunning');
    //Route::post('/tasks/{id}/consumptions', 'ConsumptionController@store');
    //Route::get('/tasks/consumptions/active', 'ConsumptionController@running');
    Route::post('/search', function () {
        $search = Request::get('search');
        if ($search != "") {
            $tasks = DB::table('tasks')->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('id', 'LIKE', '%' . $search . '%')
                ->orWhere('deadline', 'LIKE', '%' . $search . '%')
                ->get();
            if (count($tasks) > 0)

                return view('admin.tasks', ['tasks' => $tasks]);
        }
        return view('admin.tasks')->with('status', 'No Task Found');
    });

    Route::get('/users', 'Admin\UserController@registered');
    Route::get('/tasks', 'Admin\TaskController@assigned');
    Route::get('/actors', function () {
        $actors = User::roles(['name' == 'actor'])->get();

        return view('admin.users.index');
    });

    Route::post('/useradded', 'Admin\UserController@store');
    Route::get('/edit-role/{id}', 'Admin\DashboardController@edit');
    Route::put('/edited/{id}', 'Admin\DashboardController@update');
    Route::delete('/delete/{id}', 'Admin\DashboardController@delete');
    Route::delete('/deletetask/{id}', 'Admin\TaskController@delete');
    Route::get('/add_task', 'Admin\TaskController@createtask');
    Route::post('/added', 'Admin\TaskController@storre');
    Route::get('/roles', 'Admin\UserController@viewroles');
    Route::get('/groups', 'Admin\UserController@viewgroups');
    Route::get('/consumptions', 'Admin\TaskController@viewconsumption');
    Route::get('/time-spent/{id}', 'Admin\TaskController@totaltime');
    Route::get('/edit-task/{id}', 'Admin\TaskController@edit');
    Route::put('/edited-task/{id}', 'Admin\TaskController@update');
    Route::get('/user-role', 'Admin\UserController@index');
    Route::get('/create-user', 'Admin\UserController@create');
    Route::get('/create-role', 'Admin\UserController@save');
    Route::get('/durations', 'Admin\TaskController@duration');
    Route::get('/role/{id}', 'Admin\UserController@showactors');
 Route::get('/status_filter/{id}', 'Admin\TaskController@statusfilter');
    Route::get('/create-task','Admin\TaskController@createtask');
});


Route::group(['middleware' => ['auth', 'actor']], function () {
    Route::get('/actor-dashboard', function () {
        return view('admin.actors.dashboard');
    });
    Route::get('/actor-tasks/{id}', 'Admin\TaskController@actorassigned');
});

