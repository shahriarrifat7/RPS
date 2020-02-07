<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@index')->name('login');


Route::get('/assign/course', 'AssignCourseController@index')->name('assign_course');



//Student

Route::get('/student/reg', 'StudentRegController@reg')->name('student_reg');
Route::post('/student_registration', 'StudentRegController@registration');

//teacher

Route::get('/teacher/reg', 'TeacherRegController@reg')->name('teacher_reg');
Route::post('/teacher_registration', 'TeacherRegController@registration');

//Course
Route::get('/course/reg', 'CourseRegController@course_reg')->name('course');
Route::post('/course_registration','CourseRegController@regis');

//Exam
Route::get('/exam/reg', 'ExamRegController@reg')->name('exam_reg');
Route::post('/exam/exam_registration', 'ExamRegController@registration');
Route::get('/exam/course/', 'ExamRegController@searchCourse');

//paper coding
Route::get('/coding/paper', 'StudentPaperCodingController@sp_coding')->name('student_paper_coding');
Route::get('/coding/paper/exam/', 'StudentPaperCodingController@searchExam')->name('searchExam');
Route::get('/coding/paper/course/', 'StudentPaperCodingController@searchCourse')->name('searchCourse');

Route::post('/exam_paper_encoding', 'StudentPaperCodingController@registration');

//Marks
Route::get('/marks/paper', 'MarksInputController@mark_in')->name('marks_input');
Route::get('/marks/ct', 'CtMarksInputController@ctm')->name('ct_marks');


//test views
Route::get('/testing/spc', 'StudentPaperCodingController@spc_test')->name('spc');
Route::get('/testing/mit', 'MarksInputController@mark_in_test')->name('marks_input');









