@extends('layouts.app')

@section('pageTitle', 'Guestslist')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un invité') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('guest.add') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Nom complet') }}</label>

                          <div class="col-md-6">
                              <input id="fullname" type="text" class="form-control" name="fullname">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                          <div class="col-md-6">
                            <textarea id="description" type="text" class="form-control" name="description"></textarea>
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
                                  {{ __('Ajouter') }}
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>

            <div class="card">
              <div class="card-header">{{ __('Liste des invités') }}</div>
                @foreach ($guests as $guest)
                <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                      <h3>{{$guest->fullname}}</h3>
                      <p>{{$guest->description}}</p>
                      <a href="{{ route('guest.delete', ['id'=>$guest->id]) }}">Supprimer</a>
                    </div>

                    <div class="col-md-2">
                      <img src="{{ asset('/storage/'.$guest->picture_path) }}" style="max-height:80px"></img>
                    </div>
                </div>
              </div>
                @endforeach
            </div>
    </div>
</div>
@endsection
