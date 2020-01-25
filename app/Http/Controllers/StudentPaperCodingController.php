<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPaperCodingController extends Controller
{
    public function sp_coding() {
        return view('exam.student_paper_coding');
    }
}
