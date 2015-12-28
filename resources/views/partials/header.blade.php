<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{!! $pageTitle !!}</title>
    {{ Html::script('bower_components/jquery/dist/jquery.min.js') }}
    {{ Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ Html::style('css/style.css') }}
    {{ Html::style('css/menu.css') }}
    {{ Html::script('scripts/doubletaptogo.min.js') }}
</head>
<body>
@include('partials.menu')
<div class="container">