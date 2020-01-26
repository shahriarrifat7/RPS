<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtMarksInputController extends Controller
{
    public function ctm() {
        return view('marks.ct_marks');
    }
}
