
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
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
            divtest.innerHTML = '<label class="col-md-1 col-form-label text-md-right"></label><div class="col-sm-6 nopadding"><div class="form-group"><input type="text" class="form-control" id="course_names" name="course_names[]" value="" placeholder="course_names"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="course_codes" name="course_codes[]" value="" placeholder="course_codes"></div></div><div class="col-sm-2 nopadding"><div class="form-group"> <input type="text" class="form-control" id="course_credits" name="course_credits[]" value="" placeholder="course_credits"></div></div><div><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_course_fields('+ room +');"> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> </button></div></div>';
                                     
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
                        <div class="card-header">Exam Registration Form</div>
                        <div class="card-body">
                            <form  action="<?php echo e(url('/exam/exam_registration')); ?>" enctype = "multipart/form-data" method="POST">
                            <?php echo e(csrf_field()); ?>


                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>
                                    <div class="col-md-6">
                                    	<select id="year"  name="year" class="selectpicker show-tick" data-size="5">
    									<optgroup label="year">
                                        <?php
                                            $var=date("Y");

                                        ?>
                                        <?php for($i = $var ; $i > $var-6; $i--): ?>
                                            <option><?php echo e($i); ?></option>
                                        <?php endfor; ?>
        								
                                      	</select>
                                   
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
                                    <label class="col-md-4 col-form-label text-md-right">Exam Name</label>
                                    <div class="col-md-6">
                                        <input autocomplete="on" type="text" id="exam_name" class="form-control" name="exam_name">
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
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Type</label>
                                    <div class="col-md-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type" value="regular">
                                            <label class="form-check-label" for="inlineRadio1">Regular</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="type" value="improvement">
                                            <label class="form-check-label" for="inlineRadio2">Improvement</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right">Improvement of Year</label>
                                    <div class="col-md-6">
                                        <select disabled="true" id="impyear"  name="impyear" class="selectpicker show-tick" data-size="5">
                                        <optgroup label="year">
                                        <?php
                                            $var=date("Y");

                                        ?>
                                        <?php for($i = $var ; $i > $var-6; $i--): ?>
                                            <option><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                        
                                        </select>
                                   
                                    </div>
                                    
                                </div>
 								<div id="course_fields">
     								<div class="form-group row">
                                        <label class="col-md-1 col-form-label text-md-right">Courses</label>
    				                    <div class="col-sm-6 nopadding">
                          				    <div class="form-group">
                            				    <input type="text" class="form-control" id="course_names" name="course_names[]" value="" placeholder="course_names">
                          				    </div>
    				                    </div>
    				                    <div class="col-sm-2 nopadding">
                          				    <div class="form-group">
                            				    <input type="text" class="form-control" id="course_codes" name="course_codes[]" value="" placeholder="course_codes">
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
<script type="text/javascript">





    var radioValue="__ Semester";

    $('#year').on('change', function(){
        $('#exam_name').val(radioValue+" B.Sc. Engineering Examination "+$(this).val());
    })
    $('#year').change();


    $(document).ready(function(){
        $("input[type='radio']").click(function(){

                radioValue = $("input[name='course_semester']:checked").val();

                if(radioValue){
                    $('#exam_name').val(radioValue+" B.Sc. Engineering Examination "+$('#year').val());
                }

            });
    });
    $(document).ready(function(){
        $("input[type='radio']").click(function(){

                radioValue1 = $("input[name='type']:checked").val();

                if(radioValue1==='regular' || radioValue1==null){
                    $('#impyear').prop('disabled',true);
                }else{
                    $('#impyear').prop('disabled',false);
                }

            });
    });
    $('#impyear').on('click',function(){

            $year=null;
            $semester=radioValue;
            $year=$(this).val();
            $.ajax({

                type : 'get',
                url : '<?php echo e(URL::to('/exam/course/')); ?>',
                data:{'year':$year,
                        'semester':$semester},

                success:function(data){
                    console.log(data)
                    var objTo = document.getElementById('course_fields');
                    var divtest = document.createElement("div");
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
</script>
<script type="text/javascript">

        $.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });

</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>
</html><?php /**PATH /home/sr7/Desktop/my_blog2/resources/views/exam/exam_reg.blade.php ENDPATH**/ ?>