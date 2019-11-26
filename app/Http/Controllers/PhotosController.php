<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    /**
    * Return a listing of the resources.
    *
    * @return \Illuminate\Http\Response
    */
    public function albumdata()
    {
        return response(Album::get()->toJson())
        ->header('Content-Type', 'application/json');
    }

    /**
    * Display the specified resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function cover($id)
    {
        $album = Album::findOrFail($id);
        return response(Storage::disk('photo')->get('cover/'.$album->cover_name))
        ->header('Content-Type', 'image');
    }

    /**
    * Return all the photos in the specified album as a zip file
    *
    * @return \Illuminate\Http\Response
    */
    public function zip($id)
    {
        $album = Album::findOrFail($id);
        return Storage::disk('photo')->download('zip/'.$album->zip_name);
    }
}
