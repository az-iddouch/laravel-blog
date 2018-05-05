@extends('layouts.master')



@section('content')

<div class="col-md-8 blog-main">

    <h1>Sign in</h1>

    <form action="/login" method="POST">
    
    @csrf
    
    <div class="form-group">
            <label for="email">email:</label>
            <input type="email" class="form-control" id="email"  name="email" required>
           
    </div>

    <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
           
    </div>

    <div class="form-group">
            <button class="btn btn-outline-primary" type="submit" >Log in</button>
           
    </div>

    @include('layouts.errors')
    
    
    </form>

</div>


@endsection