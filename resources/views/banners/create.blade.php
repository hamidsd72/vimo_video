@extends('layouts.layout')

@section('content')
    <h2>banner.create</h2>
    <div class="row">
        <form action="{{ route('banners.store') }}" enctype="multipart/form-data" method="post" role="form" class="col-6">
            {{ csrf_field() }}
            @include('banners.form')
            <button type="submit" class="btn btn-primary">Create</button>
            @include('banners.errors')
        </form>
    </div>
@stop
