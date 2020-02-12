
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="_token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicon.png">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
   
    <title>Marks Input Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Result Processing System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="text-white btn btn-md btn-light"><a href="/resultcard">Result Card</a></li>
        </ul>
 
    </div>
    </div>
</nav>


<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Marks Input Form</div>
                        <div class="card-body">
                            <form id="myForm" action="" enctype = "multipart/form-data" method="GET">

                            <div id="course_fields">
                                <div class="form-group row">
                                    <label class="col-md-1 col-form-label text-md-right">Input ID</label>
                                    
                                    <div class="col-sm-2 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="std_id" name="std_id" value="" placeholder="student ID">
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right">Examination Year</label>
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
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Exam Name</label>
                                    <div class="col-md-6">

                                    	<select id="exam_name"  name="exam_name" class="selectpicker show-tick" data-size="10">
	    									<!-- <optgroup label="Exam Name">
 -->
                                      	</select>
                                   
                                    </div>
									
                                </div>
                                
 								
                                
 								
                                <!-- <div class="col-md-6 offset-md-4">
                                    <button  type="submit" class="btn btn-primary">Submit</button>
                                </div> -->
                                </div>

                            </form>
                            <button id="final" class="btn btn-primary btn-md">Submit</button>
                        </div>
                    </div>
            </div>
        </div>

    </div>

</main>

	<script type="text/javascript">

		$('#year').on('click',function(){

			$value=null;
			$value=$(this).val();

			$.ajax({

				type : 'get',
				url : '{{URL::to('/marks/paper/exam/')}}',
				data:{'year':$value},

				success:function(data){
					console.log(data)
		            var objTo = document.getElementById('exam_name');
			        var divtest = document.createElement("optgroup");
			        divtest.label="Select Exam";
			        divtest.innerHTML = data;
			       	var child=objTo.lastElementChild;
			        while (child) { 
           				objTo.removeChild(child); 
            			child = objTo.lastElementChild; 
        			} 
		            objTo.appendChild(divtest);
				}
			});
		})
		$('#exam_name').on('click',function(){

			$value=null;
			$value=$(this).val();

			$.ajax({

				type : 'get',
				url : '{{URL::to('/marks/paper/course/')}}',
				data:{'exam_name':$value},

				success:function(data){
					console.log(data)
		            var objTo = document.getElementById('course_title');
			        var divtest = document.createElement("optgroup");
			        divtest.label="Select Course";
			        divtest.innerHTML = data;
			       	var child=objTo.lastElementChild;
			        while (child) { 
           				objTo.removeChild(child); 
            			child = objTo.lastElementChild; 
        			} 
		            objTo.appendChild(divtest);
				}
			});
		})

        $('#final').on('click',function ()
            {
                var action = "/resultcard/";
                var exname = $("#exam_name :selected").val();
                var id = $("#std_id").val();
                action+=""+id;
                action+="/";
                action+=exname;
                console.log(action);
                
                window.location.replace(action);
            });
		
	</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>
</html>