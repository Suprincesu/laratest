@extends('layouts.main')
@section('title', 'Edit Income')
@section('content')
<h1>Income Edit Page</h1>
<form method="post" action="/income/{{$income->id}}">
    @csrf
    @method('patch')
    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Salary</label>
            <input type="text" name="salary" class="form-control" placeholder="Salary" value="{{$income->salary}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Salary Received</label>
        
            <input class="date form-control" type="text" name="salary_received" placeholder="Salary Received" value="{{$income->salary_received}}">
        </div>
    </div>
    <div class="modal-footer">
    <a type="button" class="btn btn-secondary" href="/income">Close</a>
    <button class="btn btn-primary" type="submit">Edit</button>
    </div>
</form>
    

@endsection