@extends('layouts.app')

@section('content')
    <div class="col-6 offset-3">
        <div class="card card-frame mt-5">
            <div class="card-body">
                <h2>Login</h2>

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group input-group-outline mt-4">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" id="email" required />
                    </div>
                    <div class="input-group input-group-outline mt-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password" required />
                    </div>
                    <div class="mt-4">
                        <input type="submit" name="submit" class="btn btn-success" value="Login!" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
