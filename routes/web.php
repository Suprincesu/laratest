<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\IncomeController;

Route::get('/', 'PageController@showHomepage');

Route::get('/login', 'PageController@showLogin');
Route::get('/register', 'PageController@showRegister');
Route::get('/dashboard', 'PageController@showDashboard');
Route::get('/income', 'PageController@showIncome');
Route::get('/expenses', 'PageController@showExpense');
Route::get('/logout', 'UserController@logout');

Route::post('/login', 'UserController@login');
Route::post('/reigster', 'UserController@register');
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/income', 'IncomeController@store');
Route::get('/income/edit/{id}', 'PageController@showEditIncome');
Route::patch('/income/{id}', 'IncomeController@update');
Route::delete('/income/{id}', 'IncomeController@destroy');

Route::post('/expenses', 'ExpenseController@store');
Route::patch('/expenses/{id}', 'ExpenseController@update');
Route::delete('/expenses/{id}', 'ExpenseController@destroy');
