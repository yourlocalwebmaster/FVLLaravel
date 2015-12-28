@extends('templates.page')
@section('content')
    <div id="slider">
        <!--<img src="{{ asset('img/blackmagic.jpg') }}" />-->
        <iframe src="https://player.vimeo.com/video/3448831?color=ff9933&title=0&byline=0&portrait=0" width="1140" height="855" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
@stop
@section('lowercontent')
<div class="col-sm-3">
    Content Box 1
</div>
<div class="col-sm-3">
    Content Box 2
</div>
<div class="col-sm-3">
    Conent Box 3
</div>
@stop
