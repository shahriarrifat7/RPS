<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentRegController extends Controller
{
    public function reg() {
        return view('reg.student_reg');
    }
    public function registration(Request $request) {
        $student=new Student();
        $student->student_id=$request->student_id;
        $student->student_name=$request->student_name;
        $student->session=$request->session;
        $student->hall=$request->hall;
        $student->save();
        return redirect("/student/reg")->with('message','success');
    }
}
