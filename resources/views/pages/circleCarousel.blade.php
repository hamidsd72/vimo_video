<div class="services-block col-md-12 portfolio-item filter-app">
    <a href="/{{ $content->id }}/show">
        <img src="/pictures/{{ $content->pictures[0]->path }}.jpg" class="img-fluid rounded-circle" alt="{{ $content->name }}">
    </a>
    <div class="portfolio-info">
        <h4>{{ $content->genre }} - {{ $content->language }}</h4>
        <a href="/{{ $content->id }}/show" class="details-link" title="{{ $content->name }}تماشای "></a>
    </div>
    <h6><br>{{ $content->name }}</h6>
    <h6>@if($content->is_serial)سریال@elseفیلم@endif</h6>
</div>
