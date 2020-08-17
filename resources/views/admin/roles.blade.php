@extends('layouts.master')

@section('title')

    Roles | Babita's Test Assignment
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Roles Table with Roles</h4>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="card-title"> Role<a href="{{ url('create-role') }}" class="btn btn-primary float-right">Add Role</a></h4>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>

                                    <th>
                                        Role
                                    </th>


                                    <th>Delete</th>
                                    </thead>
                                    <tbody>

                                    @foreach($roles as $role)

                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{ $role->role }}</td>
                                            <td>
                                                <form action="/delete/{{$role->id}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <input type="hidden" name="id" value="{{ $role->id }}">
                                                    <button type="submit" class="btn btn-danger" >Delete</button>

                                                </form>
                                            </td>

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
