<!DOCTYPE html>
<?php include("funs.php"); ?>
<html>

   <head>
     <title>Add Patients</title>
             <link rel = "icon" href =
             "images/logo.png"
             type = "image/x-icon">
             <meta charset="UTF-8">
      
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/sidebar.css">
      <link rel="stylesheet" href="css/sections.css">
     <link rel="stylesheet" href="css/adminpanelppp.css">
      <link rel="stylesheet" href="css/adminpanelp.css">
        <link rel="stylesheet" href="css/adminquarantine.css">
        <link rel="stylesheet" href="css/adminpatients.css">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




  </head>


   <body>


         <?php require_once "navbar.php"; ?>



         <section id="addpatient" style="margin-top:60px;margin-bottom:40px;">
          <div class ="container">
            <h1>Add Patient</h1>
            <hr/>
         <div class="main" >

                   <div class="card-body" >

             <form class="form-group" action="funs.php" method="post">
               <label>Patient ID:</label><br>
               <input type="text" name="id" class="form-control" required><br>
               <label>Full Name:</label><br>
               <input type="text" name="fname" class="form-control" required><br>
               <label>Age:</label><br>
               <input type="text" name="age" class="form-control" required><br>
               <label>Phone:</label><br>
               <input type="text" name="phone" class="form-control"><br>
               <label>Email:</label><br>
               <input type="text" name="email" class="form-control"><br>
               <label>City:</label><br>
               <input type="text" name="city" class="form-control" required><br>
               <label>Province:</label><br>
               <input type="text" name="province" class="form-control" required><br>
               <label>Patient Status :</label>
               <select class="form-control" name="status">
                 <option value="Isolate">Isolate</option>
                 <option value="Qurantine">Qurantine</option>
                 <option value="Recovered">Recovered</option>
                 <option value="Death">Death</option>
                 </select><br>
                 <label>Isolation ID:</label><br>
                 <input type="text" name="isolation_id" class="form-control"><br>
                 <label>Quarantine ID:</label><br>
                 <input type="text" name="quarantine_id" class="form-control"><br>
                 <input type="submit" class="btn btn-primary" name="pat_submit" value="Add Patient">
             </form>
                 </div>
               </div>
         </div>
         <div/>

     </section>
