@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class='col-lg-6 col-md-10 col-12 offset-lg-3 offset-md-1'>
        <div class="card shadow-md">
            <div class="card-body">
                <h3 class="text-center text-primary">{{__('Reset Password')}}</h3>
                <br>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <br>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <br>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <br>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Reset Password') }}
                                </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection



                   