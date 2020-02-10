<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseResult extends Model
{
    protected $fillable = [
        'exam_name','course_code','student_id','course_title','ctm','section_a','section_b','total','credit','letter_grade','grade_point','point_secured',
    ];
}
