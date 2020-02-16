<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Income;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function showHomepage()
    {
        return view('homepage');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showDashboard()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $incomes = Income::where("user_id","=",$id)->take(4)->orderBy('created_at', 'desc')->get();
            $expenses = Expense::where("user_id","=",$id)->take(4)->orderBy('created_at', 'desc')->get();
            return view('dashboard', ['incomes' => $incomes, 'expenses' => $expenses]);
        } else {
            return Redirect('login');
        }
    }

    public function showIncome()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $incomes = Income::where("user_id","=",$id)->get();
            return view('income', compact('incomes', $incomes));
        } else {
            return Redirect('login');
        }
    }


    public function showExpense()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $expenses = Expense::where("user_id","=",$id)->get();
            return view('expense', compact('expenses', $expenses));
        } else {
            return Redirect('login');
        }
    }
}
