<?php

$con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
if($con)
{
	//echo"Connection OK";
}
else
{
	//echo"Connection failed";
}


$delid=$_GET['del'];

$query="delete from patients where patient_id='$delid';";
$result=mysqli_query($con,$query);
if ($result)
 {
 echo"<script>alert('Data Deleted Successfully')</script>";
 echo"<script>window.open('viewpatients.php')</script>";
} else {
 echo"<script>alert('Error ')</script>";
 echo"<script>window.open('viewpatients.php')</script>";
}
?>
