@extends('layouts.app')


@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{asset('/images/0004.jpg')}}" alt="" srcset="" style="height:70vh; width:100%;">
        </div>


        <div class="col-md-6">

            <form method="POST" style="margin-top: 50px;" action="{{ route('login') }}">
                @csrf

                <h1 class="text-center">Login</h1>

                <div class="row mb-3">
                    <label for="email" class="form-label text-md-start"><b>{{ __('Email Address') }}</b></label>

                    <div class="col-md-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="form-label text-md-start"><b>{{ __('Password') }}</b></label>

                    <div class="col-md-10">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                <b>{{ __('Remember Me') }}</b>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-success">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            <b>{{ __('Forgot Your Password?') }}</b>
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('footers.footerpage')
</div>

@endsection