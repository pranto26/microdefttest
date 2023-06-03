<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
App\Models\Teacher;

class LoginController extends Controller
{
    
function login(){
    return view('login');
}
function loginSubmit(Request $req)
{
    
    $this->validate($req,[
        "name"=>"required",
        "password"=>"required"
    ]);
    $user = Teacher::where('name',$req->name)
                        ->where('password',$req->password)->first();
   
    if($user){

        $check=Teacher::where('name',$req->name)
                             ->where('password',$req->password)->first(['name']);
       
       if($check)
       {
        session()->put('logged',$user->name);
        return "Logged";

       }
    }
    else {
        session()->flash('msg','User not valid');
        return "Try Again";
    }

}

}
