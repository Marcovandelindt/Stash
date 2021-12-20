@extends('layouts.app')

@section('content')
<div class="col-6 offset-3">
    <div class="card card-frame mt-5">
        <div class="card-body">
            <h2>Register</h2>
            <p>If you have received an access code, you can create your account by filling in the form below.</p>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group input-group-outline mt-4">
                    <input type="text" name="name" class="form-control" placeholder="Name" id="name" required />
                </div>
                <div class="input-group input-group-outline mt-4">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" id="email" required />
                </div>
                <div class="input-group input-group-outline mt-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" id="password" required />
                </div>
                <div class="input-group input-group-outline mt-4">
                    <input type="text" name="access_code" class="form-control" placeholder="Access Code" id="access_code" required />
                </div>
                <div class="mt-4">
                    <input type="submit" name="submit" class="btn btn-success" value="Create my account!" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
