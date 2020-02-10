<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Papermark;

class MarksInputController extends Controller
{
    public function mark_in() {
        return view('marks.marks_input');
    }
    public function mark_in_test() {
        return view('test.marks_input');
    }
    
    public function registration(Request $request){
        $papermark = new Papermark();
        $papermark->exam_year=$request->year;
        $papermark->exam_name=$request->exam_name;
        $papermark->course_code=substr($request->course_title,0,7);
        $papermark->course_title=substr($request->course_title,7);
        $papermark->section=$request->section;    
        $papermark->paper_code=serialize($request->paper_code);
        $papermark->marks=serialize($request->marks);
        $papermark->save();
        //         return $request->course_names;
        return redirect("/marks/paper")->with('message','success');
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
