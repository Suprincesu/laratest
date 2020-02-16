@extends('layouts.main')
@section('title', 'Homepage')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple income/expense tracker application. The Goal of this application is to distinguish user's 
        major expenses and their savings.</p>
    <hr class="my-4">
    <p>Are you ready to see the difference? Are you ready to minimize your expenses and maximize savings?</p>
    @if (Auth::check())
    <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Dashboard</a>
    @else
    <a class="btn btn-primary btn-lg" href="/register" role="button">Sign Up</a>
    @endif
</div>
@endsection