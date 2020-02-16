@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<div class="mt-3">
    <div class="row m-0">
        <button type="button" class="btn btn-primary ml-auto mr-1" data-toggle="modal" data-target="#incomeModal">
            Add Salary
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#expenseModal">
            Add Expense
        </button>
    </div>
    <h3>Recent Salaries</h3>
    <div class="row">
        @foreach($incomes as $income)
        <div class="col-md-3 col-sm-12">
            <div class="card p-3 m-1">
                <h5 class="card-title">Rs. {{$income->salary}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$income->salary_received}}</h6> 
            </div>
        </div>
        @endforeach
    </div>

    <h3>Recent Expenses</h3>
    <div class="row">
        @foreach($expenses as $expenses)
        <div class="col-md-3 col-sm-12">
            <div class="card p-3 m-1">
                <h5 class="card-title">Rs. {{$expenses->expense}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$expenses->expense_date}}</h6> 
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <canvas id="incomeChart" width="200" height="150"></canvas>
    </div>
    <div class="col-md-6">
        <canvas id="expenseChart" width="200" height="150"></canvas>
    </div>
</div>

<!-- Modal -->
@include('partials.income')
@include('partials.expense')

<script>
    var incomeCtx = document.getElementById('incomeChart');
    var expenseCtx = document.getElementById('expenseChart');
    new Chart(incomeCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr','May','Jun', 'Jul', 'Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
                label: 'Salary',
                data: [6000, 7000, 7500, 6000, 5000, 6000,5000,6000,8000,9000,15000,16000],
                borderWidth: 1
            }]
        },
        options:{
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    new Chart(expenseCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr','May','Jun', 'Jul', 'Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
                label: 'Expenses',
                data: [2000, 3000, 3300, 4000, 500, 5000,5500,6000,5000,4000,10000,9000],
                borderWidth: 1
            }]
        },
        options:{
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
@endsection