<?php
$con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
function get_qur_details ()
{
	global $con;
	$quary="select *from quarantine_ward";
	$result=mysqli_query($con,$quary);
	while($row=mysqli_fetch_array($result))
	{
		$id=$row['quarantine_ward_id'];
		$name=$row['quarantine_ward_name'];
		$cap=$row['capacity'];
		$city=$row['city'];
		$prov=$row['province'];
		$phn=$row['phn_num'];
		$hname=$row['head_name'];
		echo"
		<tr>
			<td>$id</td>
			<td>$name</td>
			<td>$cap</td>
			<td>$city</td>
			<td>$prov</td>
			<td>$phn</td>
			<td>$hname</td>
			<td><a href='update_quarantine_wards.php?id=$row[quarantine_ward_id]'>Update</a></td>
			<td><a href='fun_search_quarantine_wards.php?delete_qur_btn=$row[quarantine_ward_id]'>Delete</a></td>
			<td><a href='quarantineWardDetails.php?id=$row[quarantine_ward_id]'>View</a></td>
		</tr>";
	}
}
if(isset($_POST['delete_qur_btn']))
{
  $id=$_POST['search_id'];
 $query="delete from quarantine_ward where quarantine_ward_id='$id';";
 $result=mysqli_query($con,$query);
 if($result)
	{
		echo"<script>alert('Data Deleted Successfully')</script>";
    echo"<script>window.open('search_quarantine_wards.php','_self')</script>";
	}
}
else if(isset($_POST['search_qur_btn']))
{
  $id=$_POST['search_id'];
 $query="select * from quarantine_ward where quarantine_ward_id='$id';";
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
       <th scope="col">Quarantin e Ward ID</th>
      <th scope="col">Quarantine Name</th>
      <th scope="col">Capacity</th>
      <th scope="col">City</th>
      <th scope="col">Provience</th>
      <th scope="col">Phone number</th>
      <th scope="col">Head name</th>
    </tr>
  </thead>
  <tbody>
  ';


 while($row=mysqli_fetch_array($result))
	{
		$id=$row['quarantine_ward_id'];
		$hname=$row['quarantine_ward_name'];
		$cap=$row['capacity'];
		$city=$row['city'];
		$prov=$row['province'];
		$phn=$row['phn_num'];
		$hname=$row['head_name'];
		echo"
		<tr>
			<td>$id</td>
			<td>$hname</td>
			<td>$cap</td>
			<td>$city</td>
			<td>$prov</td>
			<td>$phn</td>
			<td>$hname</td>
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
