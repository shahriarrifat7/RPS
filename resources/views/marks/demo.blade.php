
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row" style="font-size:9px;font-style:italic;text-align:center;font-weight:900">
<!-- <h6 align="center" style="padding:2%">GRADE SHEET</h6> -->
<div class="col-lg-3"></div>
<div class="col-lg-6">
<ul style="list-style:none;padding-top:5%">
<li><img src="culogo.jpg" height="40px" weight="40px"></li>
<li>UNIVERSITY OF CHITTAGONG</li>
<li>Chittagong,Bangladesh</li>
<li>Deptartment of Computer Science & Engineering</li>
<li>GRADE SHEET</li>
<li>2nd Semester B.Sc Engineering Examination 2015</li>
<li>Held in:Jan 2016 - Feb 2016</li>
</ul>
</div>
<div class="col-lg-3"></div>
</div>
<ul style="list-style:none;font-weight:900;font-size:9px;padding-left:0px">
<li>Name:Israt Jabin</li>
<li>Id_No:15701034</li>
<li>Hall:Shamsun Nahar</li>
</ul>
<table class="table table-bordered" style="list-style:none;font-size:12px;font-weight:500">
<thead>
<tr >
<th>Course No</th>
<th>Title</th>
<th>Credits</th>
<th>Letter Grade</th>
<th>Grade Point</th>
<th>Point Secured</th>
</tr>
</thead>
<tbody id="gradeSheetTablebody">
<!-- <tr>
<td>John</td>
<td>Doe</td>
<td>john@example.com</td>
</tr>
<tr>
<td>Mary</td>
<td>Moe</td>
<td>mary@example.com</td>
</tr>
<tr>
<td>July</td>
<td>Dooley</td>
<td>july@example.com</td>
</tr> -->
</tbody>
</table>
<div class="row">

<ul style="list-style:none;font-size:9px;font-weight:900;padding-left:0px">
<li>Total Credits Offered : 21</li>
<li>Total Credits Earned  : 21</li>
<li>Grade Point Average   : 3.75</li>
<li>Result                : P</li>
</ul>


</div>
</div>

<script>
var gradeSheetData =  {
    "data": [{
    "courseno": "CSE 211",
    "title":"Management Information Systems",
    "credits": 3,
    "letterGrade":"A+",
    "gradePoint":4.00,
    "pointSecured":12.00
},
{
    "courseno": "CSE 214",
    "title":"Engineering Drawing",
    "credits": 1,
    "letterGrade":"A+",
    "gradePoint":4.00,
    "pointSecured":4.00
},
{
    "courseno": "PHY 222",
    "title":"Physics Lab",
    "credits": 1,
    "letterGrade":"A-",
    "gradePoint":3.50,
    "pointSecured":3.50
},
{
    "courseno": "ENG 271",
    "title":"English",
    "credits": 3,
    "letterGrade":"A-",
    "gradePoint":3.50,
    "pointSecured":10.50
}
]
}
var data = gradeSheetData.data;
console.log(data);
create_table_body (data);
function create_table_body (data)
{
    //var tbody = document.getElementById('tablebody');
    $('#gradeSheetTablebody tr').remove();
    var tbody = document.getElementById('gradeSheetTablebody');
    var arraylength = data.length;
    //console.log(arraylength);
    for(i=0;i<arraylength ;i++){
        var row = tbody.insertRow();
        row.insertCell(0).innerHTML = data[i].courseno;
        row.insertCell(1).innerHTML = data[i].title;
        row.insertCell(2).innerHTML = data[i].credits;
        row.insertCell(3).innerHTML = data[i].letterGrade;
        row.insertCell(4).innerHTML = data[i].gradePoint;
        row.insertCell(5).innerHTML = data[i].pointSecured;
    }
}

</script>
</body>
</html>
