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
	$lat=$_POST['lat'];
	$lng=$_POST['lng'];
if(isset($_POST['iso_submit']))
{

	$quary="insert into isolation_ward(isolation_ward_id,isolation_ward_name,capacity,city,province,lat,lng)
	Values ('$id','$hname','$cap','$city','$prov','$lat','$lng')";

	$result=mysqli_query($con,$quary);
	if($result)
	{
		echo"<script>alert('Data saved Successfully')</script>";
    echo"<script>window.open('isolation_wards.php','_self')</script>";
	}
}

?>
