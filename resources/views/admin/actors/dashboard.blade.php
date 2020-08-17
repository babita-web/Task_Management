@extends('layouts.master')

@section('title')

    Actor's Dashboard | Babita's Test Assignment
@endsection
@section('content')
    <div class="div container">
        <div class="div">
            <div class="row">


                <div class="col-12 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">

                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tasks</div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo User::count_all (); ?></div>

                                </div>
                                <a class="col-auto" href="/actor-tasks/{{$user->id ?? '' }}">
                                    <?php
                                    $connection = mysqli_connect("localhost","root","","test_database");
                                    $query = "SELECT id FROM tasks ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo '<h2>'. $row.'</h2>';?>
                                    <i class="fa fa-atom"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
