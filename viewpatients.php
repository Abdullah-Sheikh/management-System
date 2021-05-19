<!DOCTYPE html>
<?php include("funs.php"); ?>
<html>
<head>
<title>Clintical</title>
        <link rel = "icon" href =
        "images/logo.png"
        type = "image/x-icon">
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/patientcss.css">


<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<?php require_once "navbar.php"; ?>


<section id="viewpatients" style="margin-top:10px;margin-bottom:40px;">
  <div class ="container">

    <div class "card-body" style="background:#202124;color:#fff; margin:8px;padding:8px;">
      <div class="row">

        <div class="col-md-6">
    <h2>Patient Record</h2>
  </div>
    <div class="col-md-6">
      <form class="form-group" action="search_patients.php" method="post">
        <div class="row">
            <div class="col-md-7">
            <input type="text" name="search_id" class="form-control">
            </div>
            <div class="col-md-2">
            <input type="submit" name="patient_search" class="btn btn-primary" value="Search">
            </div>
              <div class="col-md-2">
            <input type="submit" name="patient_del" class="btn btn-danger" value="Delete">
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
      <th colspan="2" >Operations</th>

 <!-- 		<td> "?> <button type="button" class="btn btn-success btn-rounded" onclick="location.href='updatepatient.php?id= $ids'">Update</button>  "</td>-->


    </tr>
  </thead>
  <tbody>
   <?php get_patient_details (); ?>
  </tbody>
</table>
</div>
</div>
</section>

  </body>

  </html>
