@extends('layouts.master')



@section('content')

    <div class="col-md-8 blog-main">
    
    <h2 class="blog-post-title">{{ $post->title }}</h2>

        <p>{{ $post->body }}</p>


    <div class="comments">

        @foreach($post->comments as $comment)

            <blockquote class="blockquote">
                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                <p class="mb-0">{{ $comment->body }}</p>
            </blockquote>

        @endforeach
        
    </div>

    <hr>

<div class="card">
    <div class="card-body">

        <form method="POST" action="/posts/{{ $post->id }}/comments">
        @csrf
          
            <div class="form-group">

                <textarea name="body"  cols="10" rows="5" class="form-control" placeholder="enter your commment here ."></textarea>

            </div>
            <div class="form-group">

                <button type="submit"  class="btn btn-default">Submit comment</button>

            </div>
        
        </form>
        
        @include('layouts.errors')
    
    </div>
</div>
    
    
    </div>
@endsection