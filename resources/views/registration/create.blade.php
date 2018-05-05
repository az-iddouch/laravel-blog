
@extends('layouts.master')



@section('content')


<div class="col-md-8 blog-main">

    <h1>Register</h1>

    <form action="/register" method="post">

    @csrf
    
    <div class="form-group">
            <label for="title">name</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="name" required>
           
    </div>

    <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
           
    </div>

    <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password" required>
           
    </div>

     <div class="form-group">
            <label for="password_confirmation">Password confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation" aria-describedby="emailHelp" name="password_confirmation" required>
           
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-secondary">Register</button>
    </div>
    
    </form>

     <div class="form-group">
            @include('layouts.errors')
           
    </div>

</div>


@endsection

