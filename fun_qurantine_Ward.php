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
if(isset( $_POST['login_submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$quary="SELECT * FROM  login_tb WHERE  email_id='$email' and password='$password'";
	$result=mysqli_query($con,$quary);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:adminpanel.php");
	}
	else
	{
        echo"<script>alert('Error login')</script>";
		echo"<script>window.open('login.php','_self')</script>";
	}
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

	$quary="insert into quarantine_ward(quarantine_ward_id,quarantine_ward_name,capacity,city,province,phn_num,head_name)
	Values ('$id','$qname','$cap','$city','$prov','$phn','$hname')";

	$result=mysqli_query($con,$quary);
	if($result)
	{
		echo"<script>alert('Data saved Successfully')</script>";
    echo"<script>window.open('patients.php','_self')</script>";
	}
}

?>
