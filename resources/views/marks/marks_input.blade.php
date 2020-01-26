@extends('master.form_master')
@section('form')
 <!-- message -->
<h3>{{ Session::get('message')}} </h3>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Paper Marks Input Form</div>
                        <div class="card-body">
                            <form  action="{{url('/marks_input')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Exam Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="exam_name" class="form-control" name="exam_name">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Session</label>
                                    <div class="col-md-6">
                                        <input type="text" id="session" class="form-control" name="session">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Course Title</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_title" class="form-control" name="course_title">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Course Code</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_code" class="form-control" name="course_code">
                                    </div>
                                </div>
 								
 								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Section</label>
                                    <div class="col-md-6">
                                        <input type="text" id="section" class="form-control" name="section">
                                    </div>
                                </div>
                               
 								
 								<div class="container">
                                    <div class="row clearfix">
                                		<div class="col-md-12 column">
                                			<table class="table table-bordered table-hover" id="tab_logic">
                                				<thead>
                                					<tr >
                                						<th class="text-center">
                                							#
                                						</th>
                                						<th class="text-center">
                                							Paper Code
                                						</th>
                                						<th class="text-center">
                                							Marks
                                						</th>
                                						
                                					</tr>
                                				</thead>
                                				<tbody>
                                					<tr id='addr0'>
                                						<td>
                                						1
                                						</td>
                                						<td>
                                						<input type="text" name='name0'  placeholder='' class="form-control"/>
                                						</td>
                                						<td>
                                						<input type="text" name='mail0' placeholder='' class="form-control"/>
                                						</td>
                                						
                                					</tr>
                                                    <tr id='addr1'></tr>
                                				</tbody>
                                			</table>
                                		</div>
                                	</div>
                                	<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
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

