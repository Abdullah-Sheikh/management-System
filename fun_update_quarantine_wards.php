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
if(isset($_POST['qur_submit']))
{

	$quary="UPDATE quarantine_ward SET quarantine_ward_id='$id',quarantine_ward_name='$qname', capacity='$cap',city='$city',
	province='$prov',phn_num='$phn',head_name='$hname'
	WHERE quarantine_ward_id='$id';";

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
