@extends('templates.page')
@section('content')
    <div id="slider">
        <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/3448831' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
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
