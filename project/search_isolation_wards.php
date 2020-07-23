<!DOCTYPE html>
<?php include("fun_search_isolation_wards.php"); ?>
<html>
<head>
<title>Clintical</title>
        <link rel = "icon" href =
        "images/logo.png"
        type = "image/x-icon">
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/isolation_wards.css">


<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body>
<?php require_once "navbar.php"; ?>


    <section id="searchIsolationWards" style="margin-top:60px;">

      <div class ="container">
        <br>
        <h1 style="text-align: center;">Search and Delete Isolation Ward</h1>
        <hr/>
        <br>
        <div class="card-body" style="background-color: black ; color:white ; margin: 8px; padding:8px;">
          <div class="row" style="margin-top:10px;">
            <div class="col-md-6">
              <h3>Isolation Wards Record</h3>
            </div>

            <div class="col-md-6">
              <form class="form-group" action="fun_search_isolation_wards.php" method="post">

                <div class="row">
                  <div class="col-md-5">
                    <input type="text" name="search_id" class="form-control">
                  </div>

                  <div class="col-md-2">
                    <input type="submit" name="search_iso_btn" class="btn btn-primary" value="Search">
                  </div>
                   <div class="col-md-2">
                    <input type="submit" name="delete_iso_btn" class="btn btn-danger" value="Delete">
                  </div>
                </div>
              </form>
            </div>
          </hr>
          </div>
        </div>
<div class="table-responsive" style="padding: 8px;">
  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Isolation Ward ID</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Capacity</th>
      <th scope="col">City</th>
      <th scope="col">Provience</th>
      <th colspan="2" >Perform  Operations</th>
        <th scope="col" >Details</th>

    </tr>
  </thead>
  <tbody>
   <?php get_iso_details (); ?>
  </tbody>
</table>
</div>
      <div/>

    </section>

  </body>

  </html>

  <?php
  $con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");

  function get_iso_details ()
  {
  	global $con;
  	$quary="select *from isolation_ward";
  	$result=mysqli_query($con,$quary);
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
  			<td><a href='update_isolation_wards.php?id=$row[isolation_ward_id]'>Update</a></td>
  			<td><a href='fun_search_isolation_wards.php?delete_iso_btn=$row[isolation_ward_id]'>Delete</a></td>
        <td><a href='isolationWardDetails.php?id=$row[isolation_ward_id]'>View</a></td>
      </tr>";
  	}
  }
  ?>
