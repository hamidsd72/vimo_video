@foreach ($hero as $content)

    <div class="carousel-item">
        <img src="pictures/{{ $content->pictures[0]->path }}.jpg" height="640px" class="d-block w-100" alt="{{ $content->name }}">
        <div class="carousel-caption d-none d-md-block text-right">
            <h3>{{ $content->name }}</h3>
            <a href="{{ $content->id }}/show" class="btn btn-outline-primary" title="{{ $content->name }}تماشای ">
               <h3 class="pt-2"> تماشای {{ $content->is_serial ? 'سریال' : 'فیلم' }}</h3>
            </a>
            <p>{{ $content->description }}</p>
        </div>
    </div>

@endforeach

