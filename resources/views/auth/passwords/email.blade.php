@extends('layouts.app')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
            <p class="mb-4">We get it, stuff happens. Just enter your email address below
                and we'll send you a link to reset your password!</p>
        </div>
        <form class="user" method="POST" action="{{ route('password.email') }}">
            <div class="form-group">
                <input id="email" type="email"
                       class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" placeholder="Enter Email Address..." required autocomplete="email"
                       autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="{{ route('register') }}">Create an Account!</a>
        </div>
        <div class="text-center">
            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
        </div>
    </div>
@endsection
