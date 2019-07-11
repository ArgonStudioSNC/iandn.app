<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Guest;

class GuestsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['random', 'picture',]]);
    }

    /**
     * Show the list of the guests added to the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        $guests = Guest::orderby('created_at', 'desc')->get();
        return view('guestslist', ['guests' => $guests]);
    }

    public function random()
    {
        return Guest::inRandomOrder()->get()->first()->toJson();
    }

    public function picture($id)
    {
        $guest = Guest::find($id);
        return response(Storage::disk('public')->get($guest->picture_path))
          ->header('Content-Type', 'image');
    }

    public function destroy($id)
    {
        $guest = Guest::find($id);
        Storage::disk('public')->delete($guest->picture_path);
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

        $img = $request->file('picture');

        $guest = new Guest();
        $guest->fullname = $request->fullname;
        $guest->description = $request->description;
        $guest->picture_path = Storage::disk('public')->putFile('/pictures/guest', $img);
        $guest->save();

        return redirect('/guest');
    }
}
