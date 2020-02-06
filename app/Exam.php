<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'name','year','semester','type','improvement_year','start_date','end_date','course_names','course_codes','course_credits',
    ];
}
