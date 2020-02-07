<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coding extends Model
{
    protected $fillable = [
        'exam_year','exam_name','course_code','course_title','section','student_id','paper_code',
    ];
}
