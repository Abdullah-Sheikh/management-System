<?php

$con=mysqli_connect("http://35.225.151.155/","root","asd32145","covid_19_dbms");
if($con)
{
//	echo"Connection OK";
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



if(isset($_POST['update_patients']))
{
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$province=$_POST['province'];
	$status=$_POST['status'];
	$isolation=$_POST['isolation_id'];
	$quarantine=$_POST['quarantine_id'];

$quary=" UPDATE patients SET patient_id='$id',patient_name='$fname',patient_age='$age',patient_phone='$phone',
    patient_email='$email',patient_city='$city',patient_province='$province',patient_status='$status',isolation_ward_id='$isolation',quarantine_ward_id='$quarantine'
     WHERE isolation_ward_id='$id';";

$result=mysqli_query($con,$quary);
if($result)
{
	echo"<script>alert('Data updated Successfully')</script>";
	echo"<script>window.open('viewpatients.php','_self')</script>";
}
else
{
	echo"<script>alert('Data is not updated Successfully')</script>";
	echo"<script>window.open('updatepatient.php','_self')</script>";
}
}

if(isset($_POST['pat_submit']))
{
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$province=$_POST['province'];
	$status=$_POST['status'];
	$isolation=$_POST['isolation_id'];
	$quarantine=$_POST['quarantine_id'];

	$quary="insert into patients(patient_id,patient_name,patient_age,patient_phone
	,patient_email,patient_city,patient_province,patient_status,isolation_ward_id,quarantine_ward_id) Values ('$id','$fname','$age','$phone','$email'
	,'$city','$province','$status','$isolation','$quarantine')";

	$result=mysqli_query($con,$quary);

	if($result)
	{
		echo"<script>alert('Data saved Successfully')</script>";
    echo"<script>window.open('addpatients.php','_self')</script>";
	}
}



function get_patient_details ()
{
	global $con;
	$quary="select *from patients";
	$result=mysqli_query($con,$quary);
	while($row=mysqli_fetch_array($result))
	{
		$id=$row['patient_id'];
		$fname=$row['patient_name'];
		$age=$row['patient_age'];
		$phone=$row['patient_phone'];
		$email=$row['patient_email'];
		$city=$row['patient_city'];
		$status=$row['patient_status'];
		$ids='100011';
		echo"
		<tr>
			<td>$id</td>
			<td>$fname</td>
			<td>$age</td>
			<td>$phone</td>
			<td>$email</td>
			<td>$city</td>
			<td>$status</td>
			<td><a href='updatepatient.php?id=$row[patient_id]'>Update</a></td>
			<td><a href='delpatientfunc.php?del=$row[patient_id]'>Delete</a></td>
		</tr>";
	}
}

function get_patient_count ()
{
	global $con;
	$quary="SELECT count(patient_id) AS total  FROM patients";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}

function get_quaratine_count ()
{
	global $con;
	$quary="SELECT count(quarantine_ward_id) AS total  FROM quarantine_ward";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}

function get_isolation_count ()
{
	global $con;
	$quary="SELECT count(isolation_ward_id) AS total  FROM isolation_ward";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}


function get_max_patient_city ()
{
	global $con;
	$quary="SELECT patient_city AS city  FROM patients
	where  patient_id in
	(SELECT max(patient_id)from patients)
	group by patient_city";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$c=$values['city'];
	echo " ".$c;
}
function get_min_patient_city ()
{
	global $con;
	$quary="SELECT patient_city AS city  FROM patients
	where  patient_id in
	(SELECT min(patient_id)from patients)
	group by patient_city";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$c=$values['city'];
	echo " ".$c;
}



function get_avg_patient_age ()
{
	global $con;
	$quary="SELECT Avg(patient_age) AS age  FROM patients";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$c=$values['age'];
	echo " ". (int)$c;
}
function get_max_patient_age ()
{
	global $con;
	$quary="SELECT max(patient_age) AS age  FROM patients";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$c=$values['age'];
	echo " ".$c;
}

function get_min_patient_age ()
{
	global $con;
	$quary="SELECT min(patient_age) AS age  FROM patients";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$c=$values['age'];
	echo " ".$c;
}


// for patients graph quaries !!!Start

function isolate_count ()
{
	global $con;
	$quary="SELECT count(patient_id) AS total  FROM patients where patient_status='Isolate'";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}
function quarantine_count ()
{
	global $con;
	$quary="SELECT count(patient_id) AS total  FROM patients where patient_status='Qurantine'";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}
function recovered_count ()
{
	global $con;
	$quary="SELECT count(patient_id) AS total  FROM patients where patient_status='Recovered'";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}
function death_count ()
{
	global $con;
	$quary="SELECT count(patient_id) AS total  FROM patients where patient_status='Death'";
	$result=mysqli_query($con,$quary);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];
	echo $num_rows;
}




?>
