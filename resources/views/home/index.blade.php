@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <h2>Welcome back, {{ Auth::user()->name }}</h2>
                </div>
            </div>
        </div>
    @else
        <div class="col-6 offset-3">
            <div class="card card-frame mt-5">
                <div class="card-body">
                    <h1>Welcome (back)!</h1>
                    <p>Stash is currently in beta and is only accessible with an access code. What would you like to
                        do?</p>
                    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    @endif
@endsection
