@extends('layouts.app')

@section('title','- login')


@section('content')

<div class="container py-5">
	<div class='col-lg-6 col-md-10 col-12 offset-lg-3 offset-md-1'>
		<div class="card shadow-md">
			<div class="card-body">
				<form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center text-primary">
                        	<h3>{{ __('Login') }}</h3>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <br>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <br>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
 
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
			</div>
		</div>
	</div>
</div>	

@endsection