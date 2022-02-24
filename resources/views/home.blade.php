@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-lg-8 col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">{{ __('خوش آمدید') }}</div>
                    {{ __('میز کار') }}
                </div>

                <div class="card-body bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="row text-right text-primary">
                            <div class="col">
                                <p>{{ Auth::user()->name }}</p>
                                <p>{{ Auth::user()->email }}</p>
                                <p>@if(Auth::user()->mobile)
                                        {{ Auth::user()->mobile }}
                                    @else
                                        <a class="text-success" href="#" data-toggle="modal" data-target="#myModal">درج شماره موبایل</a>
                                    @endif
                                </p>
                                <p>
                                    @if(Auth::user()->salary)
                                        {{ Auth::user()->salary }}
                                    @else
                                        <p class="text-warning">{{ __('اعتبار شما به پایان رسید') }}</p>
                                    @endif
                                </p>
                                <p>
                                    @if(Auth::user()->coin)
                                        {{ Auth::user()->coin }}
                                    @else
                                        <p class="text-warning">{{ __('فعلا امتیازی ندارید') }}</p>
                                    @endif
                                </p>
                            </div>
                            <div class="col-3">
                                <p>{{ __('نام کامل ') }}</p>
                                <p>{{ __(' ایمیل ') }}</p>
                                <p>{{ __(' موبایل ') }}</p>
                                <p>{{ __(' اعتبار ') }}</p>
                                <p>{{ __(' امتیاز ') }}</p>
                            </div>
                        </div>

                        <hr style="background-color: lemonchiffon">
                        <a class="btn btn-block btn-outline-success" href="{{ route('view') }}" >تماشا خانه</a>
                        <hr style="background-color: lemonchiffon">
                        <a class="btn btn-block btn-outline-primary"href="#" data-toggle="modal" data-target="#myModal">ویرایش اطلاعات</a>
                        <hr style="background-color: lemonchiffon">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal text-right" id="myModal">
  <div class="modal-dialog">
    <form action="{{ route('updateUser') }}" method="post" role="form">
        {{ method_field('PATCH') }}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close">ویرایش اطلاعات</button>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                @include('user.form')
                @include('user.errors')
                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-success">تایید</button>
            </div>
        </div>
    </form>
  </div>
</div>
@endsection
