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
        $this->middleware('auth'), ['except' => 'random']);
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

    public function destroy($id)
    {
        $guest = Guest::find($id);
        Storage::disk('guest-picture')->delete($guest->picture_path.'.'.$guest->extension);
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
        $extension = $img->getClientOriginalExtension();
        $img_name = substr(md5(rand()), 0, 10);

        Storage::disk('guest-picture')->put($img_name.'.'.$extension, File::get($img));

        $guest = new Guest();
        $guest->fullname = $request->fullname;
        $guest->description = $request->description;
        $guest->picture_path = $img_name;
        $guest->extension = $extension;
        $guest->save();

        return redirect('/guest');
    }
}
