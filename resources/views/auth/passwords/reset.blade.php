@extends('layouts.basic')<!--Extend template from basic-->

@section('content')<!--Start generating-->
<div id="welcomebox">{{ __('Reset Password') }}</div>
<div id="registerbox">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <div>
            <label for="email">{{ __('E-Mail Address') }}</label>
            <div>
                <input id="email" type="email" {{ $errors->has('email') ? ' is-invalid' : '' }} name="email" value="{{ $email ?? old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>

            <div >
                <input id="password" type="password" {{ $errors->has('password') ? ' is-invalid' : '' }} name="password" required>

                @if ($errors->has('password'))
                    <span role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div >
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

            <div>
                <input type="password" name="password_confirmation" required>
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
