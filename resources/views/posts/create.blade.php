@extends('layouts.master')


@section('content')


<div class="col-md-8 blog-main">

    <h1>Create a post</h1>
    <hr>
    <form action="/posts" method="POST">

        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" >
           
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" name="body" ></textarea>
        </div>

        <div class="form-group">
            <button type="submit"  class="btn btn-default">Publish</button>
        </div>

       @include('layouts.errors')
</form>




</div>

@endsection