@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/home">Home</a></li>
                </ol>
                <div class="panel panel-default">
                    <div class="post" id="{{$post->id}}">
                        <div class="post-title">{{$post->title}}</div>
                        <div class="post-message">{{$post->message}}</div>
                        <div class="post-footer">{{date('d/m/Y H:i', strtotime($post->created_at))}}</div>
                        <div class="post-comment form-group">
                            <a class="btn btn-info btn-sm" class="bt-new-text" id="comm" data-toggle="collapse" href="#new-comment" aria-expanded="false" aria-controls="#new-comment">Novo comentário</a>
                        </div>
                        <div class="collapse" id="new-comment">
                            <form method="post" action="/add/comment">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_post" value="{{$post->id}}"/>
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" id="comment" ></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-sm" value="Enviar" />
                                </div>
                            </form>
                        </div>
                    </div>
                    @foreach($comments as $comment)
                        <div class="post">
                            <div class="post-message">{{$comment->message}}</div>
                            <div class="post-footer">{{date('d/m/Y H:i', strtotime($comment->created_at))}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection