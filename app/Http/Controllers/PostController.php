<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel as Post;
use App\Models\CommentModel as Comment;
use DB;
use Auth;

class PostController extends Controller{
    public function addPost(Request $request){
        $user = Auth::user();

        $post = new Post;
        $post->title = $request->title;
        $post->message = $request->message;
        $post->id_user = $user->id;
        $post->save();

        return redirect(route('home'));
    }

    public function getPost(Request $request){
        $user = Auth::user();
        $id_post = $request->segments()[1];
        $post = DB::table('posts')
            ->select('posts.id', 'posts.title', 'posts.message', 'users.name', 'posts.created_at')
            ->join('users', 'users.id', 'posts.id_user')
            ->where('id_user', $user->id)
            ->where('posts.id', $id_post)
            ->orderBy('posts.id', 'desc')->first();

        $comments = Comment::where('id_post', $id_post)->get();

        $data = array(
            'post' => $post,
            'comments' => $comments
        );

        return view('post.post', $data);
    }

    public function addComment(Request $request){
        $user = Auth::user();
        $id_post = $request->id_post;
        $post = Post::where('id', $id_post)->where('id_user', $user->id)->first();

        if($post){
            $post->updated_at = date('Y-m-d H:m:s');
            $post->save();

            $comment = new Comment;
            $comment->message = $request->comment;
            $comment->id_post = $id_post;
            $comment->save();
        }

        return redirect('/post/'.$id_post);
    }
}
