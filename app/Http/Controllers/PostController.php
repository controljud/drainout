<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel as Post;
use Auth;

class PostController extends Controller{
    public function addPost(Request $request){
        $user = Auth::user();
        $date = time();

        $post = new Post;
        $post->title = $request->title;
        $post->message = $request->message;
        $post->id_user = $user->id;
        $post->save();

        return redirect(route('home'));
    }
}
