<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    //create
    function store(Request $request){
        $id = Auth::id();
        $expense=new Expense();
        $expense->expense=$request->expense;
        $expense->expense_date=$request->expense_date;
        $expense->description=$request->description;
        $expense->user_id=$id;
        $expense->save();
        return redirect('/expenses');
    }

    //update
    function update(){

    }

    //delete
    function destroy($id){
        $expense=Expense::findOrFail($id);
        $expense->delete();
        return redirect('/expenses');
    }
}
