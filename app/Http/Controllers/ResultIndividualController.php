<?php

namespace App\Http\Controllers;
use App\CourseResult;
use App\Student;
use App\Exam;
use Illuminate\Http\Request;

class ResultIndividualController extends Controller
{
    public function gradesheet($std_id,$exam_name)
    {
    	$res = CourseResult::where('student_id', $std_id)->get();
    	$std_data = Student::where('student_id', $std_id)->first();
    	$exam = Exam::where('name', $exam_name)->first(); //'7th Semester B.Sc. Engineering Examination 2019'
    	$start =$exam->start_date;
    	$end =$exam->end_date;
    	$totalcred = 0;
    	$earnedcred = 0;
    	$sumgpa = 0;
    	foreach($res as $resz)
    	{
    		$totalcred+=$resz->credit;
    		if($resz->letter_grade != 'F' || $resz->letter_grade != 'I')
    			{
    				$earnedcred+=$resz->credit;
    			}
    		$sumgpa+=$resz->grade_point;
    	}
    	
    	$cgpa = $sumgpa/sizeof($res);
    	
    	
    	return view('marks.resultcard', compact('res','std_data','earnedcred','totalcred','cgpa','start','end'));
    }



    public function index()
    {	
    	
    	return view('marks.resultselection');
    }
}
