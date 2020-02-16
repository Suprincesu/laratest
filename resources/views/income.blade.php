
@extends('layouts.main')
@section('title', 'Income')

@section('content')
    <div class="mt-2">
        <div class="row">
            <h5 class="card-title">All Income</h5>
            <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#incomeModal">
                Add
            </button>
        </div>
        <div class="mt-2 card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sn</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Salary Received</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incomes as $key=>$income)
                    <tr>
                        <th>{{$key +1}}</th>
                        <td>Rs. {{$income->salary}}</td>
                        <td>{{$income->salary_received}}</td>
                        <td>
                            <div class="row">
                            <button  class="btn btn-info mr-1">Edit</button>
                        <form method="post" action="/income/{{$income->id}}">
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
    @include('partials.income')
    @endsection