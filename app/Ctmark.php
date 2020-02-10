<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctmark extends Model
{
    protected $fillable = [
        'exam_year','exam_name','course_code','course_title','student_id','ct_marks','attendance','total',
    ];
}
