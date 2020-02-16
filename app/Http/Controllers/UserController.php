<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){

        $this->validate($request,[
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:255|min:3',
        ]);
        
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/income'); 
    }
}
