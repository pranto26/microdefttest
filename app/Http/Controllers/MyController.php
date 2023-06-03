<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
App\Models\Student;

class MyController extends Controller
{
    //
    function add(){
   
        return view('create');
    
    }
    
    function addsubmit(Request $req){
        
        $this->validate($req,
        [
            "name"=>"required",
            "class"=>"required",
            "dob"=>"required"
            
        ],
    );

        $stu = new Student;
        $stu -> name = $req->name;
        $stu -> class = $req->class;
        $stu -> dob = $req->date_of_birth;
        $stu ->save();
    }

    
    
    function delete ($id){
        $data = Student:: find($id);
        $data-> delete();
       
    }

}
