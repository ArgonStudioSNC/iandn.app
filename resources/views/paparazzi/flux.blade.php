@extends('layouts.header')

@section('pageTitle', 'Realtime Paparazzi Flux')

@section('body')

<body>
    <div class="position-fixed h-100 w-100 vertical-center">
        <div id="post" class="container">
            <div class="row">
                <div id="picture" class="col-9">
                    <img src="{{ url('/paparazzi/'.$post->id.'/p/full') }}"></img>
                </div>
                <div id="meta" class="col-3">
                    <div class="username">
                        {{ "$post->username" }}
                    </div>
                    <div class="comment">
                        {{ "$post->comment" }}
                    </div>
                    <div class="timestamp">
                        {{ "$post->created_at" }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-100 w-100">
        <img class="background"></img>
    </div>
</body>

<script type="text/javascript" src="{{ URL::asset('js/realtime-flux.js') }}"></script>

@endsection
