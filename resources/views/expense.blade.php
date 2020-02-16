
@extends('layouts.main')
@section('title', 'Expenses')

@section('content')
    <div class="mt-2">
        <div class="row">
            <h5 class="card-title">All Income</h5>
            <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#expenseModal">
                Add
            </button>
        </div>
        <div class="mt-2 card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sn</th>
                        <th scope="col">Expense</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $key=>$expense)
                    <tr>
                        <th>{{$key +1}}</th>
                        <td>Rs. {{$expense->expense}}</td>
                        <td>{{$expense->expense_date}}</td>
                        <td>{{$expense->description}}</td>
                        <td>
                            <div class="row">
                            <button  class="btn btn-info mr-1">Edit</button>
                        <form method="post" action="/expenses/{{$expense->id}}">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<!-- Modal -->
@include('partials.expense')
@endsection