@extends('admin.layouts.guest')
@section('content')
    <h2 class="text-4x1 font-bold text-center">Admin Confirm Password</h2>

    <!-- Validation Errors -->
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <form method="POST" action="{{ route('admin.password.confirm') }}">
        @csrf
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" class="form-control form-control-lg" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password here">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Confirm') }}</button>
        </div>
    </form>
@endsection
