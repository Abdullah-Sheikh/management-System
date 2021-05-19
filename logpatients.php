<!DOCTYPE html>
<html>
<head>
<title>Clintical</title>
        <link rel = "icon" href =
        "images/logo.png"
        type = "image/x-icon">

                <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/patientcss.css">


<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<?php require_once "navbar.php"; ?>


<section id="viewpatients" style="margin-top:50px;margin-bottom:40px;">
  <div class ="container">

    <div class "card-body" style="background:#202124;color:#fff; margin:8px;padding:8px;">
    <h2><i class="fa fa-history" aria-hidden="true" style="margin-right:5px;"></i>Patients log</h2>

  </div>


  <div class="table-responsive">
  <table class="table table-hover table-dark">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Patient ID</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Action</th>
      <th scope="col">Date and Time</th>


 <!-- 		<td> "?> <button type="button" class="btn btn-success btn-rounded" onclick="location.href='updatepatient.php?id= $ids'">Update</button>  "</td>-->


    </tr>
  </thead>
  <tbody>
   <?php get_patient_details (); ?>
  </tbody>
</table>
</div>
</div>
</section>

  </body>

  </html>
  <?php
  function get_patient_details ()
  {
    $con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
  	$quary="select *from log_patients ";
  	$result=mysqli_query($con,$quary);
  	while($row=mysqli_fetch_array($result))
  	{
      $ids=$row['id'];
  		$id=$row['patient_id'];
  		$fname=$row['patient_name'];
  		$action=$row['action'];
  		$date=$row['date'];
  		echo"
  		<tr>
        	<td>$ids</td>
  			<td>$id</td>
  			<td>$fname</td>
  			<td>$action</td>
  			<td>$date</td>

  		</tr>";
  	}
  }
  ?>
