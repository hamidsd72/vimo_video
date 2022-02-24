@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-6" style="background-image: url('/assets/img/home-bg.jpg');border-bottom-left-radius: 5%;border-top-left-radius: 5%;height: auto"></div>
            <div class="col-md col-lg bg-white" style="border-bottom-right-radius: 5%;border-top-right-radius: 5%;">
                <div class=" align-items-center py-4">
                    <div class="row m-5">
                        <div class="col-md-12 mx-auto">
                            <h3 class="mb-4">{{ __('ورود به حساب') }}</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('آدرس ایمیل') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('رمز عبور') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <div class="form-check">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="custom-control-label" for="remember">
                                            {{ __('یادآوری برای دفعه بعدی') }}
                                        </label>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">{{ __('ورود') }}</button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبورم را یادم نیست!') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
