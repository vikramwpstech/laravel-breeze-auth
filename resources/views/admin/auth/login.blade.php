@extends('admin.layouts.guest')
@section('content')
    <h4>Hello! let's get started</h4>
    <h6 class="fw-light">Sign in to continue.</h6>

    <!-- Session Status -->
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <!-- Validation Errors -->
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="form-group">
            <label for="email" >{{ __('Email') }}</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{old('email')}}" required autofocus placeholder="Enter your email here">
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password here">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Log in') }}</button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" id="remember_me" class="form-check-input" name="remember">
                    {{ __('Remember me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('admin.password.request') }}" class="auth-link text-black">{{ __('Forgot your password?') }}</a>
            @endif
        </div>
    </form>
@endsection
