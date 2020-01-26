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

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>

    </div>
    </div>
</nav>

<main class="my-form">
    <script href="{{asset('js/add_field.js')}}"></script>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Exam Registration Form</div>
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
                                    <label class="col-md-4 col-form-label text-md-right">Course Semester</label>
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
                                    <label class="col-md-4 col-form-label text-md-right">Exam Starting Date</label>
                                    <div class="col-md-6">
                                        <input autocomplete="off" name="starting_date" class="date form-control" type="text" placeholder=" Begining Date">
                                        <script type="text/javascript">                
                                        $('.date').datepicker({                
                                        format: 'yyyy-mm-dd'
                                         });  
                                        </script>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right">Exam Ending Date</label>
                                    <div class="col-md-6">
                                            <input autocomplete="off" name="ending_date" class="date form-control" type="text" placeholder="Ending Date">
                                            <script type="text/javascript">                
                                            $('.date').datepicker({                
                                            format: 'yyyy-mm-dd'
                                             });  
                                            </script>
                                    </div>
                                </div>


 								<div id="course_fields">
 								<div class="form-group row">
                                    <label class="col-md-1 col-form-label text-md-right">Courses</label>
				                    <div class="col-sm-6 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="course_name" name="course_name[]" value="" placeholder="course_name">
                      				    </div>
				                    </div>
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="course_code" name="course_code[]" value="" placeholder="course_code">
                      				    </div>
				                    </div>
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="course_credits" name="course_credits[]" value="" placeholder="course_credits">
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


