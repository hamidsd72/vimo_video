@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تایید آدرس ایمیل') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('یک لینک تأیید جدید به ایمیل شما ارسال شد.') }}
                        </div>
                    @endif

                    {{ __('قبل از ادامه ، ایمیل خود را برای لینک تأیید بررسی کنید.') }}
                    {{ __('اگر ایمیل را دریافت نکردید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('برای درخواستی دیگر اینجا کلیک کنید') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
