<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksInputController extends Controller
{
    public function mark_in() {
        return view('marks.marks_input');
    }
}
