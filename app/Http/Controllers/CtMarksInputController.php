<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ctmark;

class CtMarksInputController extends Controller
{
    public function ctm() {
        return view('marks.ct_marks');
    }
    public function ctm_test() {
        return view('test.ctm');
    }
    
    public function registration(Request $request){
        $ctmark = new Ctmark();
        $ctmark->exam_year=$request->year;
        $ctmark->exam_name=$request->exam_name;
        $ctmark->course_code=substr($request->course_title,0,7);
        $ctmark->course_title=substr($request->course_title,7);
        $ctmark->student_id=serialize($request->student_id);
        $ctmark->ct_marks=serialize($request->ct_marks);
        $ctmark->attendance=serialize($request->attendance);
        $ctmark->total=serialize($request->total);
        $ctmark->save();
        return redirect("/marks/ct")->with('message','success');
    }
    
    public function searchExam(Request $request) {
        if($request->ajax())
        
        {
            $exams = DB::table('exams')->where('year', $request->year)->get();
            $year="";
            
            if($exams)
            
            {
                foreach ($exams as $key=> $exam){
                    $year.="<option>".$exam->name."</option>";
                }
                return Response($year);
            }
        }
    }
    public function searchCourse(Request $request) {
        if($request->ajax())
        
        {
            $exams = DB::table('exams')->where('name','=',$request->exam_name)->get();
            $result="";
            if($exams!=null){
                foreach ($exams as $key=>$exam) {
                    
                    
                    $courses = unserialize($exam->course_names);
                    $codes = unserialize($exam->course_codes);
                    
                    for($i=0; $i<sizeof($courses); $i++){
                        if (strpos($courses[$i], 'Lab')== true) {
                            continue;
                        }
                        $result.="<option>".$codes[$i]."".$courses[$i]."</option>";
                    }
                }
                return Response($result);
                
            }
            
        }
    }
}
