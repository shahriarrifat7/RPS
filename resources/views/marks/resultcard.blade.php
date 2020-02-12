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
@include('includes.nav')

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
          <li>{{ $res[0]->exam_name }}</li>
          <li>Held in:{{$start}} - {{$end}}</li>
      </ul>
    </div>
      <div class="col-lg-3"></div>
  </div>
<ul style="list-style:none;font-weight:900;font-size:9px;padding-left:0px">
    <li>Name:{{ $std_data->student_name }}</li>
    <li>Id_No:{{ $std_data->student_id }}</li>
    <li>Hall:{{ $std_data->hall }}</li>
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
        @foreach ($res as $res)
        <tr>
          <td>{{ $res->course_code }}</td>
          <td>{{ $res->course_title }}</td>
          <td>{{ $res->credit }}</td>
          <td>{{ $res->letter_grade }}</td>
          <td>{{ $res->grade_point }}</td>
          <td>{{ $res->point_secured }}</td>
        </tr>
        @endforeach
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
    <li>Total Credits Offered : {{$totalcred}}</li>
    <li>Total Credits Earned  : {{$earnedcred}}</li>
    <li>Grade Point Average   : {{$cgpa}}</li>
    <li>Result                : P</li>
  </ul>


</div>
</div>


</body>
</html>
