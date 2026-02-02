@extends('layout')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 420px; border-radius: 15px;">
        <h3 class="text-center mb-4 text-success">Login to Your Account</h3>

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">Email Address</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    class="form-control form-control-lg" 
                    placeholder="Enter your email"
                >
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control form-control-lg" 
                    placeholder="Enter your password"
                >
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success w-100 py-2 mt-2">
                Login
            </button>

            <div class="text-center mt-3">
                <small>
                    Don’t have an account?
                    <a href="{{ url('/register') }}" class="text-decoration-none text-success fw-bold">
                        Register
                    </a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection
