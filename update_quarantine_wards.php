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

    <section id="updateQuarantineWards" style="margin-top:60px;">
     <div class ="container">
       <h1>Update Quarantine Ward Data</h1>
       <hr/>
       <br>
     <div style="color:darkblue;"><h5> Enter the ID of the Quarantine Ward you want to update</h5></div>
    <br>
    <div class="main" style="margin-top:-34px;">

              <div class="card-body" >

        <form class="form-group" action="fun_update_quarantine_Wards.php" method="post">
          <label>ID:</label><br>
          <input type="text" name="id" class="form-control"><br>

      <div style="margin-left: -70px; color:darkblue;"><h5> Enter the Updated Data</h5></div>
<br>
          <label>Quarantine Center Name:</label><br>
          <input type="text" name="hospital_name" class="form-control"><br>
          <label>Capacity</label><br>
          <input type="text" name="capacity" class="form-control"><br>
          <label>City:</label><br>
          <input type="text" name="city" class="form-control"><br>
          <label>Provience:</label><br>
          <input type="text" name="provience" class="form-control"><br>
          <label>Phone Number:</label><br>
          <input type="text" name="phn_num" class="form-control"><br>
          <label>Head Name:</label><br>
          <input type="text" name="head_name" class="form-control"><br>
            <input type="submit" class="btn btn-primary" name="qur_submit" value="Update Quarantine Ward">
        </form>
            </div>
          </div>
    </div>
    <div/>

</section>

  </body>

  </html>
