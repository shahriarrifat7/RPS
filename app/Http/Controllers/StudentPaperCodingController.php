<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Opis\Closure\unserialize;

class StudentPaperCodingController extends Controller
{
    public function sp_coding() {
        
        return view('exam.student_paper_coding');
    }
    
    public function spc_test() {
        
        return view('test.spc');
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
