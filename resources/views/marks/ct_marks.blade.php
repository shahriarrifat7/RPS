
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



<main class="my-form">

    <script>
        var room = 1;
        function course_fields() {
            room++;
            var objTo = document.getElementById('course_fields');
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group row removeclass"+room);
            var rdiv = 'removeclass'+room;
            divtest.innerHTML = '<label class="col-md-1 col-form-label text-md-right"></label><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="student_id" name="student_id[]" value="" placeholder="student_id"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="ct_marks" name="ct_marks[]" value="" placeholder="ct_marks"></div></div><div class="col-sm-2 nopadding"><div class="form-group"> <input type="text" class="form-control" id="attendance" name="attendance[]" value="" placeholder="attendance"></div></div><div class="col-sm-2 nopadding"><div class="form-group"> <input type="text" class="form-control" id="total" name="total[]" value="" placeholder="total"></div></div><div><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_course_fields('+ room +');"> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> </button></div></div>';
            
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
                        <div class="card-header">Marks Input Form</div>
                        <div class="card-body">
                            <form  action="{{url('/ctmarks')}}" enctype = "multipart/form-data" method="POST">
                            {{ csrf_field() }}
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
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Course Title</label>
                                    <div class="col-md-6">
                                    	<select id="course_title"  name="course_title" class="selectpicker show-tick" data-size="10">
                                      	</select>
                                    </div>
                                </div>
<!--                                 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Course Code</label>
                                    <div class="col-md-6">
                                        <input autocomplete="off"  type="text" id="course_code" class="form-control" name="course_code">

                                    </div>
                                </div> -->
 								
                                
 								<div id="course_fields">
 								<div class="form-group row">
                                    <label class="col-md-1 col-form-label text-md-right">CTM</label>
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="student_id" name="student_id[]" value="" placeholder="student_id">
                      				    </div>
				                    </div>
				                    
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="ct_marks" name="ct_marks[]" value="" placeholder="ct_marks">
                      				    </div>
				                    </div>
				                    
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="attendance" name="attendance[]" value="" placeholder="attendance">
                      				    </div>
				                    </div>
				                    
				                    <div class="col-sm-2 nopadding">
                      				    <div class="form-group">
                        				    <input type="text" class="form-control" id="total" name="total[]" value="" placeholder="total">
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

	<script type="text/javascript">

		$('#year').on('click',function(){

			$value=null;
			$value=$(this).val();

			$.ajax({

				type : 'get',
				url : '{{URL::to('/marks/ct/exam/')}}',
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
				url : '{{URL::to('/marks/ct/course/')}}',
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
		// $('#course_title').on('click',function(){

		// 	$value=null;
		// 	$value=$(this).val();

		// 	$.ajax({

		// 		type : 'get',
		// 		url : '{{URL::to('/coding/paper/course/')}}',
		// 		data:{'course_title':$value,''},

		// 		success:function(data){
		// 			console.log(data)
		//             var objTo = document.getElementById('course_code');
		// 	        var divtest = document.createElement("input");
		// 	        divtest.innerHTML = data;
		// 	       	var child=objTo.lastElementChild;
		// 	        while (child) { 
  //          				objTo.removeChild(child); 
  //           			child = objTo.lastElementChild; 
  //       			} 
		//             objTo.appendChild(divtest);
		// 		}
		// 	});
		// })
	</script>



	<script type="text/javascript">

		$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

	</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>
</html>