@extends('layouts.master')

@section('title')

    Users | Babita's Test Assignment
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Users Table with Roles</h4>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="card-title"> User Role<a href="{{ url('create-user') }}" class="btn btn-primary float-right">Add User</a></h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>ID</th>
                            <th>
                                First Name
                            </th>
                            <th>
                                Last Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Role
                            </th>
                            <th>Group</th>
                            <th>Active/Inactive</th>
                            <th>
                                Edit
                            </th>
                            <th>Delete</th>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->group }}</td>
                                    <td>
                                        @if($user->IsUserActive())
                                            <label class="btn btn-success">Active</label>
                                        @else
                                            <label class="btn btn-danger">Inactive</label>
                                        @endif
                                    </td>


                                    <td>
                                        <a href="/edit-role/{{$user->id}}" class="btn btn-success" >Edit</a>
                                    </td>
                                    <td>
                                        <form action="/delete/{{$user->id}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <button type="submit" class="btn btn-danger" >Delete</button>

                                        </form>
                                    </td>

                                </tr>
                            </tbody>

                            @endforeach
                        </table>
                    {{--    {{ $users->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 class="card-title"> Table on Plain Background</h4>
                    <p class="category"> Here is a subtitle for this table</p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
