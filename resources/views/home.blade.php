@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="first-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <a class="btn btn-primary new-drain" class="bt-new-text" id="post" data-toggle="collapse" href="#new-post" aria-expanded="false" aria-controls="#new-post">Novo drain</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-heading collapse" id="new-post">
                                <form method="post" action="/add/post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Título</label>
                                        <input class="form-control" type="text" name="title" id="title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Mensagem</label>
                                        <textarea class="form-control" name="message" id="message" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-sm" value="Enviar" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if(count($posts))
                                @foreach($posts as $post)
                                    <div class="post post-item" id="{{$post->id}}">
                                        <div class="post-title">{{$post->title}}</div>
                                        <div class="post-message">{{$post->message}}</div>
                                        <div class="post-footer">
                                            @if($post->comments > 0)
                                            <span class="badge badge-info sp-comments">+ {{$post->comments}}</span>
                                            @endif
                                            {{$post->created_at}}
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="post post-center">
                                    Não há postagem ainda. Clique em "Novo drain" para começar
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
