@extends('layout')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 420px; border-radius: 15px;">
        <h3 class="text-center mb-4 text-success">Create Your Account</h3>

        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">Full Name</label>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email Address</label>
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter a password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success w-100 py-2 mt-2">Register</button>

            <div class="text-center mt-3">
                <small>Already have an account? <a href="{{ url('/login') }}" class="text-decoration-none text-success fw-bold">Login</a></small>
            </div>
        </form>
    </div>
</div>
@endsection
