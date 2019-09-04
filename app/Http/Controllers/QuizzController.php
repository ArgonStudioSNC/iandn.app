<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['data',]]);
    }

    /**
    * Return a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function data()
    {
        if ((bool) DB::table('appvariables')->where('name', 'quizz_access')->value('value')){
            return response(Question::orderby('question_nb', 'asc')->get()->toJson())
            ->header('Content-Type', 'application/json');
        }

        return abort('403');
    }

    /**
    * Enable access to the quizz
    *
    * @return \Illuminate\Http\Response
    */
    public function enable()
    {
        DB::table('appvariables')->where('name', 'quizz_access')->update(['value' => 1]);
        return redirect('/admin');
    }

    /**
    * Desable access to the quizz
    *
    * @return \Illuminate\Http\Response
    */
    public function desable()
    {
        DB::table('appvariables')->where('name', 'quizz_access')->update(['value' => 0]);
        return redirect('/admin');
    }
}
