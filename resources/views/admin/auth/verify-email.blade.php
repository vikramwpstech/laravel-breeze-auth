@extends('admin.layouts.guest')
@section('content')

    <div class="text-sm text-gray-600">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="font-medium text-sm alert alert-success">
            A new verification link has been sent to the email address you provided during registration.
        </div>
    @endif

    <div class="flex items-center justify-between">
        <h2 class="text-4xl font-bold text-center">Admin Verify Email</h2>
        <form method="POST" action="{{ route('admin.verification.send') }}">
            @csrf
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Resend Verification Email
            </button>
        </form>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                Log Out
            </button>
        </form>
    </div>

@endsection
