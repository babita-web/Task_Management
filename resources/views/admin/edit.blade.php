@extends('layouts.master')

@section('title')

    Edit User| Babita's Test Assignment
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2> Edit the user</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="/edited/{{$users->id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="form-group row">
                                            <label for="firstname">{{ __('First Name') }}</label>
                                            <input id="firstname" type="text" value="{{$users->firstname}} "
                                                   class="form-control @error('firstname') is-invalid @enderror"
                                                   name="firstname">

                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>

                                        <div class="form-group row">
                                            <label for="lastname">{{ __('Last Name') }}</label>
                                            <input id="lastname" type="text" value="{{$users->lastname}}"
                                                   class="form-control @error('lastname') is-invalid @enderror"
                                                   name="lastname">

                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" >{{ __('Role') }}</label>

                                            <select name="role" class="form-control">
                                                <option value="{{$users->role}}">{{$users->role}}</option>
                                                <option value="admin">Admin</option>
                                                <option value="actor">Actor</option>
                                                <option value="user">Normal User</option>
                                                <option value="director">Director</option>
                                            </select>
                                            @error('role')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>

                                        <div class="form-group row">
                                            <label for="group" >{{ __('Group') }}</label>

                                            <select name="group" class="form-control">
                                                <option value="{{$users->group}}">{{$users->group}}</option>
                                                <option value="group1">Group 1</option>
                                                <option value="group2">Group 2</option>
                                                <option value="group3">Group 3</option>
                                                <option value="group4">Group 4</option>
                                            </select>
                                            @error('group')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>


                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="/users" class="btn btn-danger">Cancel</a>
                                    </form>
                                </div>
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

