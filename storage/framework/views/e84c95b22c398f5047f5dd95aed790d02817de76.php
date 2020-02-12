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
<?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
          <li><?php echo e($res[0]->exam_name); ?></li>
          <li>Held in:<?php echo e($start); ?> - <?php echo e($end); ?></li>
      </ul>
    </div>
      <div class="col-lg-3"></div>
  </div>
<ul style="list-style:none;font-weight:900;font-size:9px;padding-left:0px">
    <li>Name:<?php echo e($std_data->student_name); ?></li>
    <li>Id_No:<?php echo e($std_data->student_id); ?></li>
    <li>Hall:<?php echo e($std_data->hall); ?></li>
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
        <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($res->course_code); ?></td>
          <td><?php echo e($res->course_title); ?></td>
          <td><?php echo e($res->credit); ?></td>
          <td><?php echo e($res->letter_grade); ?></td>
          <td><?php echo e($res->grade_point); ?></td>
          <td><?php echo e($res->point_secured); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <li>Total Credits Offered : <?php echo e($totalcred); ?></li>
    <li>Total Credits Earned  : <?php echo e($earnedcred); ?></li>
    <li>Grade Point Average   : <?php echo e($cgpa); ?></li>
    <li>Result                : P</li>
  </ul>


</div>
</div>


</body>
</html>
<?php /**PATH /home/sr7/Desktop/my_blog2/resources/views/marks/resultcard.blade.php ENDPATH**/ ?>