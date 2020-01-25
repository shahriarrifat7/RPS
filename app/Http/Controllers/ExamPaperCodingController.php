<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamPaperCodingController extends Controller
{
    public function index() {
        return view('exampaper_coding');
    }
}
