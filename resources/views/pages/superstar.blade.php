<div class="container">
    <div class="row justify-content-between pt-4">

        
        @if ($superstar->first())
            
            
            @foreach ($superstar as $superstar)

                <div class="col-lg-3 col-md-4 pb-5">
                    <div class="div-img-bg">
                        <div class="about-img">
                            <a href="#">
                            <img src="/pictures/{{ $superstar->pictures[0]->path }}.jpg" class="img-responsive" alt="{{ $superstar->name }}">
                            </a>
                        </div>
                        <p class="p-heading text-right pr-4">
                            بهترین آثار {{ $superstar->name }}
                        </p>
                    </div>
                </div>

            @endforeach

        @endif


    </div>
</div>
