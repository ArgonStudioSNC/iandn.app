@extends('layouts.app')

@section('pageTitle', 'Admin panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <ul>
                        <li><a href="{{ url('/guest')}}">Gestion des invités</a></li>
                        <li><a href="{{ url('/paparazzi')}}">Paparazzi</a></li>
                        <li><a href="{{ url('/paparazzi/flux')}}">Paparazzi Realtime Flux</a></li>
                        @php
                        (bool) $access = DB::table('appvariables')->where('name', 'quizz_access')->value('value');
                        @endphp
                        <li>Le quizz est <b>{{ $access ? 'activé' : 'désactivé' }}</b>
                            <form action="{{ $access ? route('quizz.desable') : route('quizz.enable')}}">
                                <button type="submit" class="btn btn-primary">Inverser</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
