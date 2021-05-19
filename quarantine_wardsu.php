<!DOCTYPE html>
<?php include("funs.php"); ?>

<html>
<head>
  <title>Clinitical</title>
          <link rel = "icon" href =
          "images/logo.png"
          type = "image/x-icon">
          <meta charset="UTF-8">
    <meta name="description" content="Clinitical.com provides detailed information about #Covid-19">
    <meta name="keywords" content="coronavirus, healthcare, Covid-19">
    <meta name="author" content="Abdullah Sheikh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/quarantine_ward_css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <!----Navigation ---->

  <section id="nav-bar">


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="images/logo.png">Clinitical.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="isolation_wardsu.php">Isolation Wards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quarantine_wardsu.php">Quarantine Wards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

      </ul>
    </div>
  </nav>
  </section>


<!--      Main Heading      -->
  <section id="heading">
       <div class ="container">
      <h1>Quarantine wards</h1>
    </div>
  </section>

  <!--       End Main Heading      -->

  <!--      General Info      -->
    <section id="generalinfo">
      <h1>Overview</h1>
       <div class ="container">
      <div class="row generalinfo">
          <div class="col-md-4 text-center">
           <div class="icon1">
     <img src="images/gif/dialcall_gif.gif" >
          <!--      <i class="fa fa-h-square" ></i> -->
         </div>
         <h3> Dial 1166</h3>
         <h5>Health helpline</h5>
       </div>

       <div class="col-md-4 text-center">
         <img src="images/gif/hospital.gif" >
        <h3>Total Quarantine Wards</h3>
        <h6>total Wards:<?php get_quaratine_count (); ?></h6>
        <h5></h5>
      </div>

      <div class="col-md-4 text-center">
         <img src="images/gif/bed_gif.gif" >
       <h3>quarantined Patients</h3>
       <h6>total :<?php quarantine_count (); ?></h6>

       <h4></h4>
     </div>


      </div>

    </section>

    <!--       End General Info      -->

    <!--        Map     -->





        <!-- Patients record section -->
        <section id="viewpatients" style="margin-top:50px;margin-bottom:40px;">
          <div class ="container">

            <div class "card-body" style="background:#202124;color:#fff; margin:8px;padding:8px;">
              <div class="row">

                <div class="col-md-6">
            <h2>Patient Record</h2>
          </div>
            <div class="col-md-6">
              <form class="form-group" action="search_patients.php" method="post">
                <div class="row">
                    <div class="col-md-8">
                    <input type="text" name="search_id" class="form-control">
                    </div>
                    <div class="col-md-4">
                    <input type="submit" name="patient_search" class="btn btn-primary" value="Search">
                    </div>

                </div>
              </form>

            </div>
            <hr/>
          </div>
          </div>


          <div class="table-responsive">
          <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">Patient ID</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
              <th scope="col">City</th>
              <th scope="col">Status</th>

         <!-- 		<td> "?> <button type="button" class="btn btn-success btn-rounded" onclick="location.href='updatepatient.php?id= $ids'">Update</button>  "</td>-->


            </tr>
          </thead>
          <tbody>
           <?php get_patients_details (); ?>
          </tbody>
        </table>
        </div>
        </div>
        </section>
        <!-- Patients records section ends-->
        <section id="showMap" >
          <div class="ah1">
            <h1 style="font-size:80px;">Maptical Data</h1>
          </div>
          <?php require_once "mapQuarantine.php"; ?>
        </section>

        <!------------footer-------------->

        <section id="footer">
           <div class ="container text-center">
       	  <p>&copy Copyright 2020 All Rights Reserved - Clinitical.com </p>
       	</div>
         </section>

</body>
</html>


<?php
function get_patients_details ()
{
  $con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
	$quary="select *from patients where patient_status='Qurantine';";
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

		</tr>";
	}
}
?>
