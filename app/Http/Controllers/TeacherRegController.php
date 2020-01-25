<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherRegController extends Controller
{
    public function reg() {
        return view('reg.teacher_reg');
    }
    public function registration(Request $request) {
       $teacher=new Teacher();
       $teacher->teacher_name=$request->teacher_name;
       $teacher->email=$request->teacher_email;
       $teacher->designation=$request->teacher_designation;
       $teacher->save();
       return redirect("/teacher/reg")->with('message','success');
   }
}
