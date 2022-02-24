@extends('layouts.layout')
@section('content')

    <nav id="main-nav">
      <div class="row">
        <div class="container">
            @if (Auth::check())
                <a class="btn btn-outline-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item mb-2 pb-1" href="{{ route('home') }}">داشبورد</a>
                    <a class="dropdown-item mb-2 pb-1">لیست من</a>
                    <a class="dropdown-item mb-2 pb-1">خرید اشتراک</a>
                    <a class="dropdown-item mb-2 pb-1">اعتبار کاربر ۵۰۰۰</a>
                    <a class="dropdown-item pt-1" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('خروج از حساب') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
            @else
                <a href="{{ route('home') }}" class="btn btn-outline-success ml-4">ورود</a>
            @endunless

            <div class="responsive"><i data-icon="m" class="ion-navicon-round text-dark h1"></i></div>

            <ul class="nav-menu list-unstyled">
                <li><a href="#footer" class="smoothScroll">ارتباط با ما</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal" class="smoothScroll">دسته بندی ها</a></li>
                <li><a href="#about" class="smoothScroll">بازیگران</a></li>
                <li><a href="#circle" class="smoothScroll">آثار جایزه دار</a></li>
                <li><a href="#services" class="smoothScroll">فیلم و سریال</a></li>
                <li class="mr-5"><a href="#hero" class="smoothScroll">ویژه های ویمو</a></li>
            </ul>

        </div>
      </div>
    </nav><!-- End Navbar -->

    <!-- ======= Hero Section ======= -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div id="hero" class="home">

                        <br><br>
                        <div class="container">
                          <div class="hero-content text-right" style="padding-left: 50%;">
                           <h1 class="text-warning pt-3 pb-3 rounded bg-secondary"> نمایش آنلاین <span class="typed"></span></h1>
                           <p class="typed-items d-none" data-typed-person=" ویمو پلیر "> فیلم , سریال , انیمیشن , مستند </p>

                          <ul class="list-unstyled list-social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                            <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div><!-- End Hero -->
                </div>

                @include('pages.hero')

            </div>
            <a class="carousel-control-prev h2" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <p class="p-2 pt-3 bg-dark rounded-circle">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </p>
                <span class="bg-dark rounded d-none">قبلی</span>
            </a>
            <a class="carousel-control-next m-4" href="#carouselExampleIndicators" role="button" data-slide="next">
                <p class="p-2 pt-3 bg-dark rounded-circle">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </p>
                <span class="bg-dark rounded d-none">بعدی</span>
            </a>
        </div>

    <main id="main">

        @include('pages.filterBox')

        <!-- ======= Journal Section ======= -->
        <div id="Special" class="text-left paddsection">

            <div class="row text-center " style="margin-right: 2%">

                @include('pages.special')

            </div>

        </div><!-- End Journal Section -->

        <div id="services">

            @include('pages.services')

        </div>

        <!-- ======= About Section ======= -->
        <div id="about" class="pr-2">

            @include('pages.superstar')

      </div><!-- End About Section -->

        @include('pages.footer')

    </main><!-- End #main -->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">دسته بندی های کامل فیلم ها و سریال ها</h3>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body text-right">
                <h3 class="mb-4"><a data-toggle="collapse" href="#collapseExample1" role="a" aria-expanded="false" aria-controls="collapseExample1">فیلم و سریال ایرانی</a></h3>
                <div class="collapse" id="collapseExample1">
                    <div class="row">
                        @foreach ($genre as $item)
                            <div class="col-xl-3 col-lg-4 col-6 mb-2">
                                <div class="col">
                                    <img src="assets/img/home-bg.jpg" width="100%" alt="{{ $item }}">
                                    <a class="h6" href="#{{ $item    }}"> ژانر {{ $item }}</a>
                                    <hr style="background-color: darkslategray">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <hr style="background-color: darkslategray">
                
                <h3 class="mb-4 mt-4"><a data-toggle="collapse" href="#collapseExample2" role="a" aria-expanded="false" aria-controls="collapseExample2">فیلم و سریال خارخی</a></h3>
                <div class="collapse show" id="collapseExample2">
                    <div class="row">
                        @foreach ($genre as $item)
                            <div class="col-xl-3 col-lg-4 col-6 mb-2">
                                <div class="col">
                                    <img src="assets/img/home-bg.jpg" width="100%" alt="{{ $item }}">
                                    <a class="h6" href="#{{ $item }}"> ژانر {{ $item }}</a>
                                    <hr style="background-color: darkslategray">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">بستن</button>
            </div>
            
            </div>
        </div>
    </div>

@endsection
