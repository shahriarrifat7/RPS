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

Route::get('/marks/section', 'MarksInputController@index')->name('marks_input');

Route::get('/marks/ct', 'CtMarksInputController@index')->name('ct_marks_input');

Route::get('/result/course', 'CourseResultController@index')->name('ct_marks_input');

Route::get('/coding', 'ExamPaperCodingController@index')->name('exampaper_coding');

Route::get('/assign/course', 'AssignCourseController@index')->name('assign_course');

//teacher

Route::get('/teacher/reg', 'TeacherRegController@reg')->name('teacher_reg');
Route::post('/teacher_registration', 'TeacherRegController@registration');

//Course
Route::get('/course/reg', 'CourseRegController@course_reg')->name('course');
Route::post('/course_registration','CourseRegController@regis');

//Exam
Route::get('/exam/reg', 'ExamRegController@reg')->name('exam_reg');

//paper coding
Route::get('/exam/coding/paper', 'StudentPaperCodingController@sp_coding')->name('student_paper_coding');
