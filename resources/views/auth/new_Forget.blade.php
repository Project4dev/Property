@extends('layouts.app')

@section('title','- Reset-password')

@section('content')

	
<div class="container py-5">
	<div class='col-lg-6 col-md-10 col-12 offset-lg-3 offset-md-1'>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
        
		<div class="card shadow-md">
			<div class="card-body">

                <h2 class='text-center text-primary'>Forgot Your Password?</h2>
                <br>
                <p class="text-center"><b>We get it, stuff happens. Just enter your email address Below and we'll send you a link to reset your password</b></p>
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            {{-- <label for="email">{{ __('E-Mail Address') }}</label> --}}
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

                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                </form>
			</div>
		</div>
	</div>
</div>

@endsection