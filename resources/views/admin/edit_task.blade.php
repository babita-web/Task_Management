@extends('layouts.master')

@section('title')

    Edit Task| Babita's Test Assignment
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2> Edit the Task</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="/edited-task/{{$tasks->id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="form-group row">
                                            <label for="name">{{ __('Name') }}</label>
                                            <input id="name" type="text" value="{{$tasks->name}} "
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   name="name">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>

                                        <div class="form-group row">
                                            <label for="description">{{ __('Description') }}</label>
                                            <input id="description" type="text" value="{{$tasks->description}} "
                                                   class="form-control @error('description') is-invalid @enderror"
                                                   name="description">

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>



                                        <div class="form-group row">
                                            <label for="deadline">{{ __('deadline') }}</label>
                                            <input id="deadline" type="date" value="{{$tasks->deadline}}"
                                                   class="form-control @error('deadline') is-invalid @enderror"
                                                   name="deadline">

                                            @error('deadline')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>



                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="/tasks" class="btn btn-danger">Cancel</a>
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

