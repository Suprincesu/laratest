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

// Route::post('/login', 'IncomeController@index');
Route::post('/reigster', 'UserController@register');
Route::get('/contact', function(){
    return view('contact'); 
});



Route::get('/income', 'IncomeController@index');
Route::post('/income', 'IncomeController@store');
Route::patch('/income/{id}', 'IncomeController@update');
Route::delete('/income/{id}', 'IncomeController@destroy');

Route::get('/expenses', 'ExpenseController@index');
Route::post('/expenses', 'ExpenseController@store');
Route::patch('/expenses/{id}', 'ExpenseController@update');
Route::delete('/expenses/{id}', 'ExpenseController@destroy');