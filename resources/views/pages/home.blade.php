@extends('app')

@section('head')
{!! Html::style('assets/style.css') !!}
@stop

@section('content')
<h1 class="title">Get Ready to MindSurf</h1>
@stop

@section('foot')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{!! Html::script('assets/js/scripts.js') !!}

@stop