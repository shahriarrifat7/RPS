<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code','course_title','course_credit','course_semester','course_type',
    ];
}
