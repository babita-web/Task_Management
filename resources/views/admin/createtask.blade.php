

@extends('layouts.master')

@section('title')

    Task-create | Babita's Test Assignment
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add') }}</div>

                    <div class="card-body">


                        <form action="/added" method="post" >
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                       @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __(' Description') }}</label>

                                    <div class="col-md-6">
                                        <input id="description" type="" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                            <div class="form-group row">
                                <label for="deadline" class="col-md-4 col-form-label text-md-right">{{ __(' Deadline') }}</label>

                                <div class="col-md-6">
                                    <input id="deadline" type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" value="{{ old('deadline') }}" required autocomplete="deadline" autofocus>

                                    @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                                <div class="form-group row">
                                    <label for="actor_id" class="col-md-4 col-form-label text-md-right">{{ __(' Assign to') }}</label>

                                    <div class="col-md-6">
                                        <input id="actor_id" type="number" class="form-control @error('actor_id') is-invalid @enderror" name="actor_id" value="{{ old('actor_id') }}" required autocomplete="actor_id" autofocus>

                                        @error('actor_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="group_id" class="col-md-4 col-form-label text-md-right">{{ __(' Group to') }}</label>

                                    <div class="col-md-6">
                                        <input id="group_id" type="number" class="form-control @error('group_id') is-invalid @enderror" name="group_id" value="{{ old('group_id') }}" required autocomplete="group_id" autofocus>

                                        @error('group_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="adopted_by_id" class="col-md-4 col-form-label text-md-right">{{ __(' adopted_by') }}</label>

                                    <div class="col-md-6">
                                        <input id="adopted_by_id" type="number" class="form-control @error('adopted_by_id') is-invalid @enderror" name="adopted_by_id" value="{{ old('adopted_by_id') }}" required autocomplete="adopted_by_id" autofocus>

                                        @error('adopted_by_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        </a>
                                    </div>
                                </div>



                                <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
