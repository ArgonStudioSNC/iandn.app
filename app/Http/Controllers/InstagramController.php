<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class InstagramController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['data', 'add', 'picture']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('created_at', 'desc')->get();
        return view('instagram.index', ['posts' => $posts]);
    }

    /**
     * Display a random post.
     *
     * @return \Illuminate\Http\Response
     */
    public function flux()
    {
        //
    }

    /**
     * Return a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        return response(Post::orderby('created_at', 'desc')->get()->toJson())
          ->header('Content-Type', 'application/json');
    }

    /**
     * Add a newly created Post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        request()->validate([
          'username' => 'required',
          'comment' => 'nullable',
          'picture' => 'required|image',
        ]);

        $img = $request->file('picture');
        $img_full = Image::make($img)->encode('jpg');
        $img_thumb = Image::make($img)->resize(640, null, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        })->encode('jpg');

        $hash = md5($img);
        Storage::disk('instagram')->put('full/'.$hash.'.jpg', $img_full->__tostring());
        Storage::disk('instagram')->put('thumb/'.$hash.'.jpg', $img_thumb->__tostring());

        $post = new Post();
        $post->username = $request->username;
        $post->comment = $request->comment;
        $post->picture_name = $hash.'.jpg';
        $post->save();

        return redirect('/instagram');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function picture($id, $res = 'full')
    {
        $post = Post::find($id);
        if ($res != 'thumb') $res = 'full';
        return response(Storage::disk('instagram')->get($res.'/'.$post->picture_name))
          ->header('Content-Type', 'image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::disk('instagram')->delete('thumb/'.$post->picture_name);
        Storage::disk('instagram')->delete('full/'.$post->picture_name);
        Post::destroy($id);

        return redirect('/instagram');
    }
}
