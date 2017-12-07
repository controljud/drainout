@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Início
                    <form method="post" >
                        <div class="row">
                            <div class="col-md-12">
                                <label for="title">Título</label>
                                <input class="form-control" type="text" name="title" id="title"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control" name="message" id="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="button" class="btn btn-success btn-sm" value="Enviar" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($posts as $post)
                        <div class="post">
                            <div class="post-title">{{$post->title}}</div>
                            <div class="post-message">{{$post->message}}</div>
                            <div class="post-footer">{{$post->name}} - {{$post->created_at}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
