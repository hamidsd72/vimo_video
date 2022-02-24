@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <h2>{{ $banner->street }}</h2>
            <h4>{{ $banner->price }}</h4>
            <div class="description">{!! nl2br($banner->description) !!}</div>
        </div>
        <div class="col">
            <div class="row">
                @foreach($banner->photos as $photo)
                    <div class="col-4">
                        <img src="/{{ $photo->path }}" width="100%">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <hr>
    <h4>add photo</h4>
    <form action="{{route('store_photo_path', [$banner->zip, $banner->street])}}" class="dropzone" method="post" id="myAwesomeDropzone">
    	{{ csrf_field() }}
    </form>
    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName     : "file", // The name that will be used to transfer the file
            maxFilesize   : 2, // MB
            acceptedFiles : 'jpeg,jpg,png,bmp'
        };
    </script>

@stop
