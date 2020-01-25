@extends('master.form_master')
@section('form')
 <!-- message -->
<h3>{{ Session::get('message')}} </h3>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Course Registration Form</div>
                        <div class="card-body">
                            <form  action="{{url('/teacher_registration')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Course Code</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_code" class="form-control" name="course_code">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Course Title</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_title" class="form-control" name="course_title">
                                    </div>
                                </div>

								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Course Credit</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_credit" class="form-control" name="course_credit">
                                    </div>
                                </div>

								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Course Semester</label>
                                    <div class="col-md-6">
                                        <div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="1st Semester">
                							<label class="form-check-label" for="inlineRadio1">1st Semester</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="2nd Semester">
                							<label class="form-check-label" for="inlineRadio2">2nd Semester</label>
                						</div>
										<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="3rd Semester">
                							<label class="form-check-label" for="inlineRadio1">3rd Semester</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="4th Semester">
                							<label class="form-check-label" for="inlineRadio2">4th Semester</label>
                						</div>
					
										<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="5th Semester">
                							<label class="form-check-label" for="inlineRadio1">5th Semester</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="6th Semester">
                							<label class="form-check-label" for="inlineRadio2">6th Semester</label>
                						</div>

										<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="7th Semester">
                							<label class="form-check-label" for="inlineRadio1">7th Semester</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_semester" id="course_semester" value="8th Semester">
                							<label class="form-check-label" for="inlineRadio2">8th Semester</label>
                						</div>
                                    </div>
                                </div>

				
 
                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Course Type</label>
                                    <div class="col-md-6">
<!--                                         <input type="text" id="teacher_designation" class="form-control" name="teacher_designation"> -->
                							<div class="form-check form-check-inline">
                								<input class="form-check-input" type="radio" name="course_type" id="course_type" value="Theoritical">
                								<label class="form-check-label" for="inlineRadio1">Theoritical</label>
                							</div>
                							<div class="form-check form-check-inline">
                                    			<input class="form-check-input" type="radio" name="course_type" id="course_type" value="Lab">
                                    			<label class="form-check-label" for="inlineRadio2">Lab</label>
                							</div>
                                   
                                    </div>
									
                                </div>
 
                               
 
 
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
 
</main>
@endsection

