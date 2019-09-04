<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Guest;
use Intervention\Image\ImageManagerStatic as Image;

class GuestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['data', 'picture',]]);
    }

    /**
     * Show the list of the guests added to the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        $guests = Guest::orderby('id', 'asc')->get();
        return view('guest.index', ['guests' => $guests]);
    }

    public function data()
    {
        return response(Guest::orderby('id', 'ASC')->get()->toJson())
          ->header('Content-Type', 'application/json');
    }

    public function picture($id)
    {
        $guest = Guest::find($id);
        return response(Storage::disk('guest')->get($guest->picture_name))
          ->header('Content-Type', 'image');
    }

    public function destroy($id)
    {
        $guest = Guest::find($id);
        Storage::disk('guest')->delete($guest->picture_name);
        Guest::destroy($id);

        return redirect('/guest');
    }

    /**
     * Store a new guest in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        request()->validate([
          'fullname' => 'required',
          'description' => 'required',
          'picture' => 'required|image',
        ]);

        $img = Image::make($request->file('picture'))->resize(640, null, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        })->encode('jpg');

        $hash = md5($img);
        Storage::disk('guest')->put($hash.'.jpg', $img->__tostring());

        $guest = new Guest();
        $guest->fullname = $request->fullname;
        $guest->description = $request->description;
        $guest->picture_name = $hash.'.jpg';
        $guest->save();

        return redirect('/guest');
    }
}
