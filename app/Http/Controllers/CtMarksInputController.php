<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtMarksInputController extends Controller
{
    public function index() {
        return view('ct_marks_input');
    }
}
