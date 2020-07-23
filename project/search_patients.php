<?php
$con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");

if (isset($_POST['patient_del'])) {
	$id=$_POST['patient_del'];
	$query="delete from patients where patient_id='$id';";
 $result=mysqli_query($con,$query);
 if ($result) {
 	echo"<script>alert('Data Deleted Successfully')</script>";
    echo"<script>window.open('viewpatients.php','_self')</script>";
 }
}



if(isset($_POST['patient_search'])){
  $id=$_POST['search_id'];
 $query="select * from patients where patient_id='$id';";
 $result=mysqli_query($con,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
		<title>Clinitical</title>
		        <link rel = "icon" href =
		        "images/logo.png"
		        type = "image/x-icon">
    <!-- Boo  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">tstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Phone</th>
      <th>Email</th>
      <th>City</th>
      <th>Status</th>

    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $id=$row['patient_id'];
		$fname=$row['patient_name'];
		$age=$row['patient_age'];
		$phone=$row['patient_phone'];
		$email=$row['patient_email'];
		$city=$row['patient_city'];
		$status=$row['patient_status'];
    echo '<tr>
      <td>'.$id.'</td>
      <td>'.$fname.'</td>
      <td>'.$age.'</td>
      <td>'.$phone.'</td>
      <td>'.$email.'</td>
      <td>'.$city.'</td>
      <td>'.$status.'</td>
    </tr>';
  }
echo '</tbody></table></div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}

?>
