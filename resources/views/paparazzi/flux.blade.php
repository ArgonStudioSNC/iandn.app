@extends('layouts.header')

@section('pageTitle', 'Realtime Paparazzi Flux')

@section('body')

<body>
  <div id="fullscreen-img-container" class="w-100 h-100" style="background-color: black;">
        <img id="fullscreen-img" class="contain w-100 h-100" src="{{ url('/paparazzi/'.$post->id.'/p/full') }}"></img>
  </div>
</body>

<script type="text/javascript" src="{{ URL::asset('js/realtime-flux.js') }}"></script>

@endsection
