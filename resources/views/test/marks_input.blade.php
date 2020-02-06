@extends('master.form_master')

@section('title')

<title>Marks Input</title>
@endsection

@section('form')




<main class="my-form">

    <script>
        var room = 1;
        function course_fields() {
            room++;
            var objTo = document.getElementById('course_fields');
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group row removeclass"+room);
            var rdiv = 'removeclass'+room;
            divtest.innerHTML = '<label class="col-md-3 col-form-label text-md-right"></label><div class="col-sm-4 nopadding"><div class="form-group"><input type="text" class="form-control" id="paper_code" name="paper_code[]" value="" placeholder="paper_code"></div></div><div class="col-sm-4 nopadding"><div class="form-group"><input type="text" class="form-control" id="marks" name="marks[]" value="" placeholder="marks"></div></div><div><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_course_fields('+ room +');"> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> </button></div></div>';
                                     
            objTo.appendChild(divtest);
        }
        function remove_course_fields(rid) {
            $('.removeclass'+rid).remove();
        }
    </script>



    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Student Paper Coding Form</div>
                        <div class="card-body">
                            <form  action="{{url('/testing_mit')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>
                                    <div class="col-md-6">
                                    	<select id="year"  name="year" class="selectpicker show-tick" data-size="5">
                                        <?php
                                            $var=date("Y");

                                        ?>
                                        @for ($i = $var ; $i > $var-6; $i--)
                                            <option>{{$i}}</option>
                                        @endfor
        								
                                      	</select>
                                    </div>
									
                                </div>


 
                               <div class="form-group row">
                                    <label for="exam_name" class="col-md-4 col-form-label text-md-right">Exam Name</label>
                                    <div class="col-md-6">
                                    	<select id="exam_name"  name="exam_name" class="selectpicker show-tick" data-size="10">
	    									<optgroup label="Exam Name">
                                      	</select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_title" class="col-md-4 col-form-label text-md-right">Course title</label>
                                    <div class="col-md-6">
                                    	<select id="course_title"  name="course_title" class="selectpicker show-tick" data-size="10">
	    									<optgroup label="Course Title">
                                      	</select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="course_code" class="col-md-4 col-form-label text-md-right">Course Code</label>
                                    <div class="col-md-6">
                                    	<select id="course_code"  name="course_code" class="selectpicker show-tick" data-size="10">
	    									<optgroup label="Course Code">
                                      	</select>
                                    </div>
                                </div>

 								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Section</label>
                                    <div class="col-md-6">
                                        <div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="section" id="section" value="A">
                							<label class="form-check-label" for="inlineRadio1">Section A</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="section" id="section" value="B">
                							<label class="form-check-label" for="inlineRadio2">Section B</label>
                						</div>
										
                                    </div>
                                </div>
                                
                                
 								<div id="course_fields">
 								<div class="form-group row">
                                    <label class="col-md-3 col-form-label text-md-right">Input Marks</label>
				                    <div class="col-sm-4 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="paper_code" name="paper_code[]" value="" placeholder="paper_code">
                      				    </div>
				                    </div>
				                    <div class="col-sm-4 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="marks" name="marks[]" value="" placeholder="marks">
                      				    </div>
				                    </div>
				                    
                                    <div>
                                        <div class="input-group-btn">
                                             <button class="btn btn-success" type="button"  onclick="course_fields();"> <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </button>
      						            </div>                                                                      
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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