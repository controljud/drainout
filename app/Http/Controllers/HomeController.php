<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->select('posts.id', 'posts.title', 'posts.message', 'users.name', 'posts.created_at')
            ->join('users', 'users.id', 'posts.id_user')->orderBy('id', 'desc')->get();
        return view('home', array('posts' => $posts));
    }
}
