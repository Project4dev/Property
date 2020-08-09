@extends('layouts.app')

@section('title','- register')

@section('content')

	
<div class="container py-5">
	<div class='col-lg-6 col-md-10 col-12 offset-lg-3 offset-md-1'>
		<div class="card shadow-md">
			<div class="card-body">
				 <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center text-primary">
                        	<h4>{{ __('Registration') }}</h4>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <br>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <br>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
			</div>
		</div>
	</div>
</div>	

@endsection
