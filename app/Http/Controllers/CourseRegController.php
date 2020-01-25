<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseRegController extends Controller
{
    public function course_reg() {
        return view('marks.course');
    }
    
    public function regis(Request $request) {
        $course=new Course();
        $course->course_code=$request->course_code;
        $course->course_title=$request->course_title;
        $course->course_credit=$request->course_credit;
        $course->course_semester=$request->course_semester;
        $course->course_type=$request->course_type;
        $course->save();
        return redirect("/course/reg")->with('message','success');
    }
}
