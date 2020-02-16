<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;

class IncomeController extends Controller
{
    //read 
    public function index(){
        $incomes=Income::all();
        return view('welcome',compact('incomes',$incomes));
    }

    //create
    function store(Request $request){
        $income=new Income();
        $income->salary=$request->salary;
        $income->salary_received=$request->salary_received;
        $income->save();
        return redirect('/income');
    }

    //update
    function update(){

    }

    //delete
    function destroy($id){
        $income=Income::findOrFail($id);
        $income->delete();
        return redirect('/income');
    }
}
