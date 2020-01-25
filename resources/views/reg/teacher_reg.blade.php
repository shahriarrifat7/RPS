@extends('master.form_master')
@section('form')
 <!-- message -->
<h3>{{ Session::get('message')}} </h3>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Teacher Registration Form</div>
                        <div class="card-body">
                            <form  action="{{url('/teacher_registration')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="teacher_name" class="form-control" name="teacher_name">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="teacher_email" class="form-control" name="teacher_email">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Designation</label>
                                    <div class="col-md-6">
<!--                                    <input type="text" id="teacher_designation" class="form-control" name="teacher_designation"> -->
                                    	<select id="teacher_designation"  name="teacher_designation" class="selectpicker show-tick" data-size="10">
    									<optgroup label="Designation">
        								<option>Lecturer</option>
        								<option>Assistant Professor</option>
                                      	<option>Associate Professor</option>
                                      	<option>Professor</option>
                                      	</select>
                                   
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
    </div>
 
</main>
@endsection

