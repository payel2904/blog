@extends('layouts.app')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>
        <form class="user" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">

                <input id="name" type="text"
                       class="form-control form-control-user @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name..." autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="email" type="email"
                       class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="name" type="text"
                       class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                       value="{{ old('phone') }}" required autocomplete="name" placeholder="018..." autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="password" type="password"
                           class="form-control form-control-user @error('password') is-invalid @enderror"
                           name="password"
                           required autocomplete="new-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <input id="password-confirm" type="password" placeholder="Repeat Password"
                           class="form-control form-control-user"
                           name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Register') }}
            </button>
        </form>
        <hr>
        <div class="text-center">
            @if (Route::has('password.request'))
                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
        </div>
        <div class="text-center">
            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
        </div>
    </div>
@endsection
