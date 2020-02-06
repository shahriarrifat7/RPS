<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exam;
class ExamRegController extends Controller
{
    public function reg() {
        return view('exam.exam_reg');
    }
    public function registration(Request $request){
        $exam=new Exam();
        $exam->name=$request->exam_name;
        $exam->year=$request->year;
        $exam->semester=$request->course_semester;
        $exam->type=$request->type;
        $exam->improvement_year=$request->impyear;
        $exam->start_date=$request->starting_date;
        $exam->end_date=$request->ending_date;
        $exam->course_names=serialize($request->course_names);
        $exam->course_codes=serialize($request->course_codes);
        $exam->course_credits=serialize($request->course_credits);
        $exam->save();
//         return $request->course_names;
        return redirect("/exam/reg")->with('message','success');
    }
    public function searchCourse(Request $request) {
        if($request->ajax())
        
        {
            $exams = DB::table('exams')->where('year',$request->year)->where('semester',$request->semester)->get();
            $result="";
            if($exams!=null){
                foreach ($exams as $key=>$exam) {
                    
                    
                    $courses = unserialize($exam->course_names);
                    $codes = unserialize($exam->course_codes);
                    $credits=unserialize($exam->course_credits);
                    for($i=0; $i<sizeof($courses); $i++){
                        $result.='<div class="form-group row">
                        <div class="col-sm-6 nopadding">
                        <div class="form-group">
                        <input type="text" class="form-control" id="course_names" name="course_names[]" value="'.$courses[$i].'" placeholder="course_names">
                        </div>
                        </div>
                        <div class="col-sm-2 nopadding">
                        <div class="form-group">
                        <input type="text" class="form-control" id="course_codes" name="course_codes[]" value="'.$codes[$i].'" placeholder="course_codes">
                        </div>
                        </div>
                        <div class="col-sm-2 nopadding">
                        <div class="form-group">
                        <input type="text" class="form-control" id="course_credits" name="course_credits[]" value="'.$credits[$i].'" placeholder="course_credits">
                        </div>
                        </div>
                        </div>';
                    }
                } 
                return Response($result);
                
            }
            
        }
    }
}
