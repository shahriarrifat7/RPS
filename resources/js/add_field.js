var room = 1;
function course_fields() {
    room++;
    var objTo = document.getElementById('course_fields');
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group row removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<label class="col-md-1 col-form-label text-md-right"></label><div class="col-sm-6 nopadding"><div class="form-group"><input type="text" class="form-control" id="course_name" name="course_name[]" value="" placeholder="course_name"></div></div><div class="col-sm-2 nopadding"><div class="form-group"><input type="text" class="form-control" id="course_code" name="course_code[]" value="" placeholder="course_code"></div></div><div class="col-sm-2 nopadding"><div class="form-group"> <input type="text" class="form-control" id="course_credits" name="course_credits[]" value="" placeholder="course_credits"></div></div><div><div class="input-group-btn"><button class="btn btn-danger" type="button"  onclick="remove_course_fields('+ room +');"> <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> </button></div></div>';
                             
    objTo.appendChild(divtest);
}
function remove_course_fields(rid) {
    $('.removeclass'+rid).remove();
}