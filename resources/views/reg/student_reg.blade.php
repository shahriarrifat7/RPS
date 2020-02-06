@extends('master.form_master')
@section('form')
 <!-- message -->
<h3>{{ Session::get('message')}} </h3>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Student Registration Form</div>
                        <div class="card-body">
                            <form  action="{{url('/student_registration')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="student_id" class="col-md-4 col-form-label text-md-right">student ID</label>
                                    <div class="col-md-6">
                                        <input type="text" id="student_id" class="form-control" name="student_id">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="student_name" class="form-control" name="student_name">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="hall" class="col-md-4 col-form-label text-md-right">Hall</label>
                                    <div class="col-md-6">
                                        <input type="text" id="hall" class="form-control" name="hall">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="session" class="col-md-4 col-form-label text-md-right">Session</label>
                                    <div class="col-md-6">
                                    	<select id="session"  name="session" class="selectpicker show-tick" data-size="5">
    									<optgroup label="session">
                                        <?php
                                            $var=date("Y");

                                        ?>
                                        @for ($i = $var ; $i > $var-6; $i--)
                                            <option>{{$i-1}}-{{$i}}</option>
                                        @endfor
        								
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

