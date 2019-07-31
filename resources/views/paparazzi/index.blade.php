@extends('layouts.app')

@section('pageTitle', 'Paparazzi')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un post') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('paparazzi.add') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>

                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control" name="username">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Commentaire') }}</label>

                          <div class="col-md-6">
                            <textarea id="comment" type="text" class="form-control" name="comment"></textarea>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                          <div class="col-md-6">
                            <input id="picture" type="file" class="form-control" name="picture">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Poster') }}
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>

            <div class="card">
              <div class="card-header">{{ __('Liste des posts') }}</div>
                @foreach ($posts as $post)
                <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                      <p>{{ $post->updated_at }}</p>
                      <h3>{{$post->username}}</h3>
                      <p>{{$post->comment}}</p>
                      <a href="{{ route('paparazzi.delete', ['id'=>$post->id]) }}">Supprimer</a>
                    </div>

                    <div class="col-md-4 text-md-right">
                      <img src="{{ url('/paparazzi/'.$post->id.'/p/thumb') }}" style="max-height:80px"></img>
                    </div>
                </div>
              </div>
                @endforeach
            </div>
    </div>
</div>
@endsection
