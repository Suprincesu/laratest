@extends('layouts.main')
@section('title', 'Register')

@section('content')
<div class="row">
    <div class="col-md-5 mx-auto mt-5" >
        <form method="POST" action="{{ action('UserController@register') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1" >Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" >
              </div>
            <div class="form-group">
            <label for="exampleInputEmail1" >Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" >
            </div>
            <div class="form-group">
            
            <label for="exampleInputPassword1">Password</label>
        
            <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            @if (count($errors) > 0)
            <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection