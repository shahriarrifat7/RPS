<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignCourseController extends Controller
{
    public function index() {
        return view('assign_course');
    }
}
