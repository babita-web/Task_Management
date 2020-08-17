@extends('layouts.master')

@section('title')

    Tasks| Babita's Test Assignment
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Tasks Details</h4>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h5 class="card-title"> Tasks Title : {{ $tasks->name }}</h5>
                        <h6 class="card-title">Task ID : {{ $tasks->id }}</h6>
                        <h6 class="card-title">Task Description : {{ $tasks->description }}</h6>
                        <h6 class="card-title">Task Deeadline : {{ $tasks->deadline }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="h5">Total Time Spent :  {{ $time_spent= (new Carbon\Carbon($tasks->updated_at))->diff(new Carbon\Carbon( $tasks->created_at))->format('%Y-%m-%d:%h:%I') }}</div>
                        <div class="h6">Task Created : {{ $tasks->created_at }}</div>
                        <div class="h6">Task Edited : {{ $tasks->updated_at }}</div>
                        <div class="card">
                            <h5 class="card-title">Task started on :{{ $tasks->created_at }}</h5>
                            <h6 class="card-body">Assigned to : Actor ID- {{ $tasks->actor_id }}</h6>
                            <h6 class="card-body">Assigned Actor's Group ID : Group Id-{{ $tasks->group_id }}</h6>
                            <h6 class="card-body">moved to : Actor Id-{{ $tasks->adopted_by_id }}</h6>

                        </div>
                        <div class="h5">Status : {{ $tasks->status }}
                            @if ($tasks->status == 1)
                               : Task is Active
                            @endif
                            @if ($tasks->status == 2)
                                : Task is Paused
                            @endif
                            @if ($tasks->status == 3)
                                : Task is Stopped
                            @endif
                            @if ($tasks->status == 4)
                                : Task is Finished
                            @endif
                            @if ($tasks->status == 5)
                                : Task is Archived
                            @endif
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('script')


@endsection

