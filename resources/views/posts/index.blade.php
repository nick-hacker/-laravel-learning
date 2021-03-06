@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a> by {{ $post->author->username }} {{ $post->created_at->diffForHumans() }}</div>

                <div class="panel-body">
                    {{ $post->body }}
                </div>
                <div class="panel-footer">
                     Comments {{ $post->comments_count }}++
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</div>
@endsection
