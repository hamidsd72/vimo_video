@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-6" style="background-image: url('/assets/img/home-bg.jpg');border-bottom-left-radius: 5%;border-top-left-radius: 5%;height: auto"></div>
            <div class="col-md col-lg bg-white" style="border-bottom-right-radius: 5%;border-top-right-radius: 5%;">
                <div class=" align-items-center py-4">
                    <div class="row m-5">
                        <div class="col-md-12 mx-auto">
                            <h3 class="mb-4">{{ __('ایجاد حساب  کاربری ') }}</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام کامل') }}</label>
                                    <div class="col-md">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>
                                    <div class="col-md">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>
                                    <div class="col-md">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور') }}</label>
                                        <div class="col-md">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md offset-md-4">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            {{ __('ایجاد حساب') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
