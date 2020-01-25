@extends('master.form_master')
@section('form')
 <!-- message -->
<h3>{{ Session::get('message')}} </h3>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Exam Registration Form</div>
                        <div class="card-body">
                            <form  action="{{url('/exam_registration')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Exam Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="exam_name" class="form-control" name="exam_name">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Exam Starting Date</label>
                                    <div class="col-md-6">
                                        <input type="text" id="starting_date" class="form-control" name="starting_date">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Exam Ending Date</label>
                                    <div class="col-md-6">
                                        <input type="text" id="ending_date" class="form-control" name="ending_date">
                                    </div>
                                </div>
 								
 								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Courses</label>
                                    <div class="col-md-6">
                                        <input type="text" id="exam_courses" class="form-control" name="exam_courses">
                                    </div>
                                </div>
                               
 
 
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Submit
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

