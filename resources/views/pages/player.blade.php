<video class="overlay" id="player" controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

    <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
            default>
    <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
</video>

<link href="{{ asset('css/player.css') }}" rel="stylesheet">
<script src="{{ asset('js/player.js') }}"></script>
<script>
    const player = new Plyr('video', {captions: {active: true}});
    window.player = player;
</script>

<!-- <video id="player" src="https://dl16.ftk.pw/user/shahab3/film/Spiral.2021.720p.BluRay.SUBFA.Film2Movie_Asia.mkv"></video>

<script>
    const player = new Plyr('#player');
</script> -->

