<p class="d-none">{{$i = 0}}</p>
@foreach ($array as $item)

    @if ($item->first())

        <div id="portfolio">
            <div id="{{$item->first()->genre}}" class="container">
                <div class="section-title text-right">
                    <h4 class="float-left"><a href="#"><i data-icon="m" class="ion-navicon-round text-dark"></i> مشاهده همه </a></h4>
                    <h4><a href="#services"> ژانر {{ $genre[$i] }} </a></h4>
                </div>
            </div>
            <div class="services-carousel owl-theme">
                @foreach($item as $content)
                   @include('pages.carousel')
                @endforeach
            </div>
        </div>

    @endif
    {{$i++}}

@endforeach

<div id="circle">

    <p class="d-none">{{$i = 0}}</p>
    @foreach ($arrayCircle as $item)

        @if ($item->first())

            <div id="portfolio">
                <div id="{{$item->first()->genre}}" class="container">
                    <div class="section-title text-right">
                        <h4 class="float-left"><a href="#"><i data-icon="m" class="ion-navicon-round text-dark"></i> مشاهده همه </a></h4>
                        <h4><a href="#circle"> ژانر {{ $genre[$i] }} </a></h4>
                    </div>
                </div>
                <div class="services-carousel owl-theme">
                    @foreach($item as $content)
                       @include('pages.circleCarousel')
                    @endforeach
                </div>
            </div>

        @endif
        {{$i++}}

    @endforeach

</div>
