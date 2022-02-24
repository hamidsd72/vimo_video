@extends('layouts.layout')
@section('content')

    <link href="{{ asset('css/player.css') }}" rel="stylesheet">
    <script src="{{ asset('js/player.js') }}"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <style>
        #hero {
            background: url("/pictures/{{ $content->pictures[0]->path }}.jpg") repeat scroll center center/cover;
            width: 100%;
        }
    </style>
    <main id="main">

        <div id="hero">
            <div class="container">
                <div class="hero-content text-right text-warning">
                    {{-- @unless ($content->is_serial)<a type="button" data-toggle="modal" data-target="#myModal">@endunless --}}
                    <h1 class="text-warning">{{ $content->name }} {{ $content->persian_name }}</h1>
                    <h5 class="pb-2"> <span class="badge badge-pill badge-dark p-2">{{ $content->language }}</span> ساخت کشور <span class="ml-5 badge badge-pill badge-dark p-2">{{ $content->country }}</span> زبان </h5>
                    <h5 class="pb-3"><span class="badge badge-pill badge-dark p-2">{{ $content->genre }}</span> سال ساخت <span class="ml-5 badge badge-pill badge-dark p-2">{{ $content->release }}</span> ژانر</h5>
                    <h5 class="p-3 ml-5 bg-dark rounded mb-2">{{ $content->description }}</h5>
                    <h5>{{ $content->user_age }}+ مناسب برای سنین </h5>
                    @unless ($content->is_serial)
                        <a type="button" class="text-center" data-toggle="modal" data-target="#myModal">
                            <i class="ion-ios-play-outline big rounded-circle bg-secondary p-3" style="width: 40px;height: 40px"></i>
                        </a>
                    @endunless
                    {{-- @unless ($content->is_serial)</a>@endunless --}}
                </div>
            </div>
        </div>

        <div class="container">

            @if($content->is_serial)

                <p class="text-right pr-5">
                     سریال {{ $content->name }} <br>
                    <button class="btn btn-warning rounded">فصل اول</button>
                </p>

                <div class="container row h4 mb-5">


                    @foreach($movie as $movie)
                        <div class="col-lg-3 col-md-6" id="players{{ $movie->number }}">

                            <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
                                <img src="/pictures/{{ $content->pictures[0]->path }}.jpg"  width="100%" alt="{{ $movie->name.$movie->number }}">
                                <div class="w3-display-middle w3-center">
                                    <a type="button" class="text-center" data-toggle="modal" data-target="#myModal{{ $movie->number }}">
                                        <i class="ion-ios-play-outline big rounded-circle bg-secondary pl-4 pr-2"></i>
                                    </a>
                                </div>
                            </header>
                            <h6 class="text-center">قسمت {{ $movie->number }} {{ $movie->persian_name }}
                            <br><span class="text-dark">{{ $movie->description }}</span></h6>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal{{ $movie->number }}" data-backdrop="static">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4><a href="/{{ $content->id }}/show/">بستن پخش کننده</a></h4>
                                        </div>
                                        {{-- <video id="player{{ $movie->number }}" controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

                                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                                                default>
                                            <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                                        </video> --}}
                                        <video id="player{{ $movie->number }}" src="{{ $movie->path }}"></video>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const player{{ $movie->number }} = new Plyr('#player{{ $movie->number }}');
                            </script>
                        </div>
                    @endforeach

                </div>

            @else

                <div class="container mb-5">

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal" data-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4><a href="/{{ $content->id }}/show">بستن پخش کننده</a></h4>
                                </div>

                                <video src="{{ $movie->path }}"></video>

                                {{-- <video id="player" controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

                                    <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                                        default>
                                    <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                                </video> --}}

                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    const player = new Plyr('video', {captions: {active: true}});
                    window.player = player;
                </script>
            @endif

            <div class="text-center">

                <div class="pb-5 pt-5">
                    <h1>آثار مشابه</h1><br><br>

                    @if ($item->first())

                        <div id="portfolio">
                            <div class="services-carousel owl-theme">
                                @foreach($item as $content)
                                    @include('pages.carousel')
                                @endforeach
                            </div>
                        </div>

                    @endif
                    
                </div>

                <div class="pb-5">
                    <h1>بازیگران و عوامل</h1><br><br>

                    @if ($item->first())

                        <div id="portfolio">
                            <div class="services-carousel owl-theme">
                                @foreach($item as $content)
                                    @include('pages.circleCarousel')
                                @endforeach
                            </div>
                        </div>

                    @endif
                    
                </div>

                <div class="mb-5 pb-5">
                    <h1>نظرات</h1>

                    {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> --}}
                        <div class="row m-5 php-email-form">
        
                            <div class="col-lg-6">
                                <div class="form-group contact-block1">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-6">
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-12">
                                <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-12">
                                <div class="form-group">
                                <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-12 mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
            
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                            </div>
        
                        </div>
                    {{-- </form> --}}

                </div>
            </div>

        </div>

    </main>

@endsection
