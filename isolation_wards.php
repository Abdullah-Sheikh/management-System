<!DOCTYPE html>
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

    <section id="addIsolationWard" style="margin-top:60px;">
     <div class ="container">
       <h1>Add Isolation Ward</h1>
       <hr/>
    <div class="main" style="margin-top:-34px;">

              <div class="card-body" >

        <form class="form-group" action="fun_Isolation_Ward.php" method="post">
          <label>ID:</label><br>
          <input type="text" name="id" class="form-control" required><br>
          <label>Hospital Name:</label><br>
          <input type="text" name="hospital_name" class="form-control" required><br>
          <label>Capacity</label><br>
          <input type="text" name="capacity" class="form-control" required><br>
          <label>City:</label><br>
          <input type="text" name="city" class="form-control" required><br>
          <label>Provience:</label><br>
          <input type="text" name="provience" class="form-control" required><br>
          <label>Latitude:</label><br>
          <input type="text" name="lat" class="form-control" required><br>
          <label>Longitude:</label><br>
          <input type="text" name="lng" class="form-control" required><br>
            <input type="submit" class="btn btn-primary" name="iso_submit" value="Add Isolation Ward">
        </form>
            </div>
          </div>
    </div>
    <div/>

</section>

  </body>

  </html>
