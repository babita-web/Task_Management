@extends('layouts.app')
<body>
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <h1>
            <div class="card-body">
           Babita's Test Assignment Laravel
            </div></h1>
        </div>
    </div>


    </div>
</div>
    @endsection
</body>
</html>
@section('script')

@endsection

