@extends('admin.layouts.guest')
@section('content')

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <h2 class="text-4x1 font-bold text-center">Admin Forgot Password</h2>

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

    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf
        <div class="form-group">
            <label for="email" >{{ __('Email') }}</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{old('email')}}" required autofocus placeholder="Enter your email here">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Email Password Reset Link') }}</button>
        </div>
    </form>
@endsection
