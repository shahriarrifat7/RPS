<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Opis\Closure\unserialize;
use App\Coding;

class StudentPaperCodingController extends Controller
{
    public function sp_coding() {
        
        return view('exam.student_paper_coding');
    }
    
    public function spc_test() {
        
        return view('test.spc');
    }
    
    public function registration(Request $request){
        $coding = new Coding();
        $coding->exam_year=$request->year;
        $coding->exam_name=$request->exam_name;
     //   $temp = $request->course_title;
        $coding->course_code=substr($request->course_title,0,7);
        $coding->course_title=substr($request->course_title,7);
        $coding->section=$request->section;
        $coding->student_id=serialize($request->student_id);
        $coding->paper_code=serialize($request->paper_code);
        
        $coding->save();
        //         return $request->course_names;
        return redirect("/coding/paper")->with('message','success');
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
