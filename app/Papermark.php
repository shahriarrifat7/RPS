<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papermark extends Model
{
    protected $fillable = [
        'exam_year','exam_name','course_code','course_title','section','paper_code','marks',
    ];
}
