@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a> by {{ $post->author->username }} {{ $post->created_at->diffForHumans() }}</div>

                <div class="panel-body">
                    {{ $post->body }}
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Comments</h3>
                </div>
                <div class="panel-body">
                    @foreach($post->comments as $comment)
                        <blockquote>
                            {{ $comment->body }}
                            <small><cite>{{ $comment->user->username }}</cite> {{ $comment->created_at->diffForHumans() }}</small>
                        </blockquote>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
