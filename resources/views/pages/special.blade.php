@foreach ($special as $content)

    <div class="col-lg-3 col-md-6">
        <div class="journal-info">
            <a href="{{ $content->id }}/show" class="details-link" title="{{ $content->name }}تماشای ">
                <img src="pictures/{{ $content->pictures[0]->path }}.jpg" width="115%" class="img-responsive" alt="{{ $content->name }}">
            </a>
            <div class="journal-txt">
                <h4><a href="#">{{ $content->name }}</a></h4>
                <p><a href="#">{{ $content->name }}</a></p>
            </div>
        </div>
    </div>

@endforeach
