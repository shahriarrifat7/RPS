<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksInputController extends Controller
{
    public function mark_in() {
        return view('marks.marks_input');
    }
    public function mark_in_test() {
        return view('test.marks_input');
    }
}
