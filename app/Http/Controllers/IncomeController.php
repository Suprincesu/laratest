<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    //create
    function store(Request $request){
        $id = Auth::id();
        $income=new Income();
        $income->salary=$request->salary;
        $income->salary_received=$request->salary_received;
        $income->user_id=$id;
        $income->save();
        return redirect('/income');
    }

    // form post edit data
    public function update(Request $request,$id){
        $income=Income::findOrFail($id);
        $income->salary=$request->salary;
        $income->salary_received=$request->salary_received;
        $income->save();
        return redirect('/income');
    }

    //delete
    function destroy($id){
        $income=Income::findOrFail($id);
        $income->delete();
        return redirect('/income');
    }
}
