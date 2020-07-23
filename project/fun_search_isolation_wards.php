<?php
$con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
if (isset($_POST['delete_iso_btn'])) {
	$id=$_POST['search_id'];
	$query="delete from isolation_ward where isolation_ward_id='$id';";
 $result=mysqli_query($con,$query);
 if ($result) {
 	echo"<script>alert('Data Deleted Successfully')</script>";
    echo"<script>window.open('search_isolation_wards.php','_self')</script>";
 }
}
if(isset($_POST['search_iso_btn']))
{
  $id=$_POST['search_id'];
 $query="select * from isolation_ward where isolation_ward_id='$id';";
 $result=mysqli_query($con,$query);
echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
       <th scope="col">Isolation Ward ID</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Capacity</th>
      <th scope="col">City</th>
      <th scope="col">Provience</th>

    </tr>
  </thead>
  <tbody>
  ';


 while($row=mysqli_fetch_array($result))
	{
		$id=$row['isolation_ward_id'];
		$hname=$row['isolation_ward_name'];
		$cap=$row['capacity'];
		$city=$row['city'];
		$prov=$row['province'];
		echo"
		<tr>
			<td>$id</td>
			<td>$hname</td>
			<td>$cap</td>
			<td>$city</td>
			<td>$prov</td>
		</tr>";
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
