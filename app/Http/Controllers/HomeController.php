<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
        $user = Auth::user();
        $posts = DB::table('posts')
            ->select('posts.id', 'posts.message', 'users.name', 'posts.created_at', DB::raw('count(comments.id) as comments'))
            ->join('users', 'users.id', 'posts.id_user')
            ->leftJoin('comments', 'comments.id_post', 'posts.id')
            ->where('posts.id_user', $user->id)
            ->groupBy('posts.id', 'posts.title', 'posts.message', 'users.name', 'posts.created_at')
            ->orderBy('posts.updated_at', 'desc')->paginate(15);
        return view('home', array('posts' => $posts));
    }
}
