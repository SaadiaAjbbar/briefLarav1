@extends('layout')

@section('content')
<h2>Login</h2>

<form method="POST" action="{{ url('/login') }}">
    @csrf

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button class="btn btn-primary">Login</button>

    <p class="mt-3">
        Pas encore inscrit ? <a href="{{ route('register') }}">Register</a>
    </p>
</form>
@endsection
