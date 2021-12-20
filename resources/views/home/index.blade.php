@extends('layouts.app')

@section('content')
<div class="col-6 offset-3">
    <div class="card card-frame mt-5">
        <div class="card-body">
            <h1>Welcome (back)!</h1>
            <p>Stash is currently in beta and is only accessible with an access code. What would you like to do?</p>
            <a class="btn btn-primary" href="#">Login</a>
            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>
@endsection
