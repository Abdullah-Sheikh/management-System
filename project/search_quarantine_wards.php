<!DOCTYPE html>
<?php include("fun_search_quarantine_wards.php"); ?>
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


    <section id="searchQuarantineWards" style="margin-top:60px;">

      <div class ="container">
        <br>
        <h1 style="text-align: center;">Search and Delete Quarantine Ward</h1>
        <hr/>
        <br>
        <div class="card-body" style="background-color: black ; color:white ; margin: 8px; padding:8px;">
          <div class="row" style="margin-top:10px;">
            <div class="col-md-6">
              <h3>Quarantine Wards Record</h3>
            </div>

            <div class="col-md-6">
              <form class="form-group" action="fun_search_quarantine_wards.php" method="post">

                <div class="row">
                  <div class="col-md-7">
                    <input type="text" name="search_id" class="form-control">
                  </div>

                  <div class="col-md-2">
                    <input type="submit" name="search_qur_btn" class="btn btn-primary" value="Search">
                  </div>
                  <div class="col-md-2">
                    <input type="submit" name="delete_qur_btn" class="btn btn-danger" value="Delete">
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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Capacity</th>
      <th scope="col">City</th>
      <th scope="col">Provience</th>
      <th scope="col">Phn Number</th>
      <th scope="col">Head Name</th>
      <th colspan="2" >Perform  Operations</th>
        <th scope="col" >Details</th>
    </tr>
  </thead>
  <tbody>
   <?php get_qur_details (); ?>
  </tbody>
</table>
</div>
      <div/>

    </section>

  </body>

  </html>
