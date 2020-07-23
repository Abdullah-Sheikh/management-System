<?php

$con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
if($con)
{
	echo"Connection OK";
}
else
{
	echo"Connection failed";
}

	$id=$_POST['id'];
	$hname=$_POST['hospital_name'];
	$cap=$_POST['capacity'];
	$city=$_POST['city'];
	$prov=$_POST['provience'];
if(isset($_POST['iso_submit']))
{

	$quary="UPDATE isolation_ward SET isolation_ward_id='$id',isolation_ward_name='$hname', capacity='$cap',city='$city',
	province='$prov'
	WHERE isolation_ward_id='$id';";

	$result=mysqli_query($con,$quary);
	if($result)
	{
		echo"<script>alert('Data updated Successfully')</script>";
    echo"<script>window.open('update_isolation_wards.php','_self')</script>";
	}
	else
	{
		echo"<script>alert('Data is not updated Successfully')</script>";
    echo"<script>window.open('update_isolation_wards.php','_self')</script>";
	}
}

?>
