<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CourseResult;

class Student{
    public $sid;
    public $mark_a;
    public $mark_b;
    public $mark_ct;
    public $total;
    public $grade;
    public $grade_point;
}

class ResultController extends Controller
{
    
    public function demo() {
        return view('marks.demo');
    }
    public function res() {
        
        
       // $student01 = new Student();
        $courses = DB::table('exams')->where('name','=','7th Semester B.Sc. Engineering Examination 2019')->first();
        $course_array = unserialize($courses->course_codes);
        $course_name_array = unserialize($courses->course_names);
        $course_credit_array = unserialize($courses->course_credits);
        for($k=0; $k<sizeof($course_array); $k++) {
            
      
            $ctm = DB::table('ctmarks')->where('course_code','=',$course_array[$k])->first();
            if($ctm == null) continue;
            $st_id = unserialize($ctm->student_id);
            $st_ctmarks = unserialize($ctm->ct_marks);
            
            $papermarka = DB::table('papermarks')->where('course_code','=',$course_array[$k])->where('section','=','A')->first();
            //if($papermarka == null) continue;
            $pa_code = unserialize($papermarka->paper_code);
            $pa_marks = unserialize($papermarka->marks);
            
            $ida = DB::table('codings')->where('course_code','=',$course_array[$k])->where('section','=','A')->get();
            $coding_a = unserialize($ida[0]->paper_code);
            $std_ida = unserialize($ida[0]->student_id);
            
            
            $papermarkb = DB::table('papermarks')->where('course_code','=',$course_array[$k])->where('section','=','B')->get();
            //if($papermarkb == null) continue;
            $pb_code = unserialize($papermarkb[0]->paper_code);
            $pb_marks = unserialize($papermarkb[0]->marks);
            
            $idb = DB::table('codings')->where('course_code','=',$course_array[$k])->where('section','=','B')->get();
            $coding_b = unserialize($idb[0]->paper_code);
            $std_idb = unserialize($idb[0]->student_id);
            
            
            $section_a_id=[];
            $indx=-1;
            for($i=0; $i<sizeof($pa_code); $i++){
                
                for($j=0; $j<sizeof($coding_a); $j++) {
                    if($pa_code[$i] == $coding_a[$j]) {
                        $indx = $j ;
                       // error_log($indx);
                        break;
                    }
                }
              //  if($indx !=-1) break;
                array_push($section_a_id, $std_ida[$indx]);
            }
            
            $section_b_id=[];
            $indx=-1;
            for($i=0; $i<sizeof($pb_code); $i++){
                
                for($j=0; $j<sizeof($coding_b); $j++) {
                    if($pb_code[$i] == $coding_b[$j]) {
                        $indx = $j ;
                        // error_log($indx);
                        break;
                    }
                }
                //  if($indx !=-1) break;
                array_push($section_b_id, $std_idb[$indx]);
            }
            /*
            $sum = 0;
            for($i=0; $i<sizeof($st_id); $i++){
                
                if($st_id[$i] == '16701001') {
                    $student01->mark_ct  = $st_ctmarks[$i];
                    break;
                }
            }
            for($i=0; $i<sizeof($section_a_id); $i++){
                
                if($section_a_id[$i] == '16701001') {
                    $student01->mark_a =  $pa_marks[$i];
                    break;
                }
            }
        
        */
        
        //all student's result
            $course_student_array=[];
            for($i=0; $i<sizeof($st_id); $i++){
                $temp = new Student();
                $temp1 = new CourseResult();
                
                $temp1->exam_name = '7th Semester B.Sc. Engineering Examination 2019';
                $temp1->course_code = $course_array[$k];
                $temp->sid = $st_id[$i];
                $temp1->student_id = $st_id[$i];
                $temp1->course_title = $course_name_array[$k];
                $temp->mark_ct = $st_ctmarks[$i];
                $temp1->ctm = $st_ctmarks[$i];
                for($j=0; $j<sizeof($section_a_id); $j++) {
                    if($temp->sid == $section_a_id[$j]) {
                        $temp->mark_a = $pa_marks[$j];
                        $temp1->section_a = $pa_marks[$i];
                        break;
                    }
                }
                
                for($j=0; $j<sizeof($section_b_id); $j++) {
                    if($temp->sid == $section_b_id[$j]) {
                        $temp->mark_b = $pb_marks[$j];
                        $temp1->section_b = $pb_marks[$i];
                        break;
                    }
                }
                $temp->total = $temp->mark_ct + $temp->mark_a +  $temp->mark_b;
                $temp1->total = $temp1->ctm + $temp1->section_a+  $temp1->section_b;
                $temp1->credit = $course_credit_array[$k];
                $temp1->letter_grade = "A+";
                $temp1->grade_point = 4.00;
                $temp1->point_secured = 12.00;
                
                $temp1->save();
                
             //   array_push($course_student_array, $temp);
                
            }
            
            for($i=0; $i<sizeof($course_student_array); $i++) {
                error_log($course_student_array[$i]->sid." ".$course_student_array[$i]->total);
            }
        
        }
        //$student01->total = $student01->mark_ct+ $student01->mark_a;
        
        $arr=[$st_id, $st_ctmarks];
        
        
        //result processing
        
        
        
        
        return view('marks.demo');
    }
    
    
    
    /*
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
    } */
    
    
}
