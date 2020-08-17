@extends('layouts.master')

@section('title')

    Consumptions | Babita's Test Assignment
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Consumption Table with Roles</h4>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>

                                    <th>
                                        Start date
                                    </th>
                                    <th>STOP DATE</th>
                                    <Th>Time Spent</Th>
                                    <th>task id</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>

                                    @foreach($consumptions as $consumption)

                                        <tr>
                                            <td>{{$consumption->id}}</td>
                                            <td>{{ $consumption->start}}</td>
                                            <td>{{ $consumptions->stop }}</td>
                                            <td>{{  $start = Carbon::parse($consumption->start);
$pause = Carbon::parse($consumption->stop);

$time_spent = $pause->diffInSeconds($start) }}</td>
                                            <td>{{$consumptions->actor_id}}</td>
                                            <td>{{$consumptions->task_id}}</td>
                                        </tr>
                                    </tbody>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

@section('script')

@endsection
