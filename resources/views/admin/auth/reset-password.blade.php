@extends('admin.layouts.guest')
@section('content')
    <h2 class="text-4x1 font-bold text-center">Admin Reset Password</h2>

    <!-- Validation Errors -->
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <form method="POST" action="{{ route('admin.password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <label for="email" >{{ __('Email') }}</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email', $request->email) }}" required autofocus placeholder="Enter your email here">
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" required placeholder="Enter your new password here">
        </div>
        <div class="form-group">
            <label for="password">{{ __('Confirm Password') }}</label>
            <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required placeholder="Enter your confirm password here">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Reset Password') }}</button>
        </div>
    </form>
@endsection
