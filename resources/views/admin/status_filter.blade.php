@extends('layouts.master')

@section('title')

    Tasks| Babita's Test Assignment
@endsection
@section('content')

    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/add_task" method="post">
                    {{csrf_field()}}

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Task Title</label>
                            <input type="text" class="form-control" name="name" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Deadline</label>
                            <input type="date" class="form-control" name="deadline" id="message-text"></
                        >
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>--}}

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tasks Table </h4>
                    <h6 class="card-title"> Total Tasks: <?php
                        $connection = mysqli_connect("localhost","root","","test_database");
                        $query = "SELECT id FROM tasks ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo  $row;?>


                        <div class="card-body">
                            <form action="{{URL::to('search')}}" method="post">
                                {{csrf_field()}}
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                        </div>
                        <div class="card-body">
                            Filter:
                            <?php $status_filter = DB::table('tasks')->get(); ?>
                            foreach($status_filters as $status_filter)
                            <a href="{{ url('status_filter', $status_filter->id) }}">{{ ucwords($status_filter->status_filter).'s' }}
                                @endforeach

                            </a>

                            <a href="/tasks">All</a> |
                            <a href="/tasks/status/{{ $tasks->status=5 }}">Archived</a> |
                            <a href="/tasks/status/{{ $tasks->status=1 }}">Active</a> |
                            <a href="/tasks/status/{{ $tasks->status=3 }}">Stopped</a>|
                            <a href="/tasks/status/{{ $tasks->status=4 }}">Finished</a>|
                            <a href="/tasks/status/{{ $tasks->status=2 }}">Paused</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id= "tasktable" class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Task_ID
                                    </th>
                                    <th>Created On</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Due Date</th>
                                    <th>Time Spent Y-M-D:h:m</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    @foreach( $status_f as $task)

                                        <tr>
                                            <td>{{$task->id}}</td>
                                            <td>{{$task->created_at}}</td>

                                            <td>{{ $task->name}}</td>
                                            <td>{{ $task->description }}</td>
                                            <td>{{ $task->deadline }}</td>

                                            <td>
                                                <a href = "/time-spent/{{$task->id}}" class="btn btn-primary">{{  (new Carbon\Carbon($task->updated_at))->diff(new Carbon\Carbon( $task->created_at))->format('%Y-%m-%d:%h:%I') }}</a>
                                            </td>


                                            <td>
                                                <a href="/edit-task/{{$task->id}}" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>
                                                <form action="/deletetask/{{$task->id}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}

                                                    <input type="hidden" name="id" value="{{ $task->id }}">
                                                    <button type="submit" class="btn btn-danger">Delete</button>

                                                </form>
                                            </td>

                                        </tr>
                                    </tbody>

                                    @endforeach
                                    </tr>
                                </table>
                                {{--                            {{ $tasks->links() }}--}}
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            /*var table = $('#tasktable').DataTable({
                'processing': true,
                'serverSide':true,

            })*/
        })
    </script>
@endsection
