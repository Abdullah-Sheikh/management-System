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
	$qname=$_POST['quarantine_name'];
	$cap=$_POST['capacity'];
	$city=$_POST['city'];
	$prov=$_POST['provience'];
	$phn=$_POST['phn_num'];
	$hname=$_POST['head_name'];
	$lat=$_POST['lat'];
	$lng=$_POST['lng'];
if(isset($_POST['qur_submit']))
{

	$quary="insert into quarantine_ward(quarantine_ward_id,quarantine_ward_name,capacity,city,province,phn_num,head_name,lat,lng)
	Values ('$id','$qname','$cap','$city','$prov','$phn','$hname','$lat','$lng')";

	$result=mysqli_query($con,$quary);
	if($result)
	{
		echo"<script>alert('Data saved Successfully')</script>";
    echo"<script>window.open('quarantine_wards.php','_self')</script>";
	}
}

?>
