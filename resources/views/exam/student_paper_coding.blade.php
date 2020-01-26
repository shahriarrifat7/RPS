
@extends('master.form_master')
@section('form')


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
   
    <title>Laravel</title>
</head>
<body>



<main class="my-form">
    <script>
        var room = 1;
        function course_fields() {
            room++;
            var objTo = document.getElementById('course_fields');
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group row removeclass"+room);
            var rdiv = 'removeclass'+room;
            divtest.innerHTML = '<label class="col-md-1 col-form-label text-md-right"></label><div class="col-sm-6 nopadding"><div class="form-group"><input type="text" class="form-control" id="student_id" name="student_id[]" value="" placeholder="student_id"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="paper_code" name="paper_code[]" value="" placeholder="paper_code"></div></div><div><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_course_fields('+ room +');"> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> </button></div></div>';
                                     
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
                            <form  action="{{url('/exam_registration')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Exam Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="exam_name" class="form-control" name="exam_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Course Title</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_title" class="form-control" name="course_title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Course Code</label>
                                    <div class="col-md-6">
                                        <input type="text" id="course_code" class="form-control" name="course_code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Section</label>
                                    <div class="col-md-6">
                                        <input type="text" id="section" class="form-control" name="section">
                                    </div>
                                </div>
 <!--  
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Session</label>
                                    <div class="col-md-6">
                                        <div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio1">2019-2020</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio2">2019-2020</label>
                						</div>
										<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio1">2019-2020</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio2">2019-2020</label>
                						</div>
					
										<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio1">2019-2020</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio2">2019-2020</label>
                						</div>

										<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio1">2019-2020</label>
                						</div>
                						<div class="form-check form-check-inline">
                							<input class="form-check-input" type="radio" name="course_session" id="course_session" value="2019-2020">
                							<label class="form-check-label" for="inlineRadio2">2019-2020</label>
                						</div>
                                    </div>
                                </div>

                                -->
                                
                               


 								<div id="course_fields">
 								<div class="form-group row">
                                    <label class="col-md-1 col-form-label text-md-right">Paper Coding</label>
				                    <div class="col-sm-6 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="student_id" name="student_id[]" value="" placeholder="student_id">
                      				    </div>
				                    </div>
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="paper_code" name="paper_code[]" value="" placeholder="paper_code">
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


  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>

@endsection
