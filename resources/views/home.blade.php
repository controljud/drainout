@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="first-content">
                    <div class="form-group">
                        <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#novoPost" aria-expanded="false" aria-controls="#novoPost">Novo drain</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-heading collapse" id="novoPost">
                                <form method="post" action="/add/post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Título</label>
                                        <input class="form-control" type="text" name="title" id="title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Mensagem</label>
                                        <textarea class="form-control" name="message" id="message"></textarea>
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
                                    <div class="post">
                                        <div class="post-title">{{$post->title}}</div>
                                        <div class="post-message">{{$post->message}}</div>
                                        <div class="post-footer">{{$post->created_at}}</div>
                                    </div>
                                @endforeach
                            @else
                                <div class="post post-center">
                                    Não há mensagens ainda
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
