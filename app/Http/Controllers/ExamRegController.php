<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamRegController extends Controller
{
    public function reg() {
        return view('exam.exam_reg');
    }
}
