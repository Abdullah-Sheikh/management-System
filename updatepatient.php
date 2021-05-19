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

         <?php



         $con=mysqli_connect("localhost","root","asd32145","Covid_19_dbms");
         $getid=$_GET['id'];



        $query="select * from patients where patient_id='$getid';";
        $result=mysqli_query($con,$query);

   while($row=mysqli_fetch_array($result)){

              $id=$row['patient_id'];
              $fname=$row['patient_name'];
              $age=$row['patient_age'];
              $phone=$row['patient_phone'];
              $email=$row['patient_email'];
              $city=$row['patient_city'];
              $province=$row['patient_province'];
              $status=$row['patient_status'];
              $isolation_id=$row['isolation_ward_id'];
            	$quarantine_id=$row['quarantine_ward_id'];
}
            ?>



         <section id="addpatient" style="margin-top:60px;margin-bottom:40px;">
          <div class ="container">
            <h1>Update Patient</h1>
            <hr/>
         <div class="main" >

                   <div class="card-body" >

             <form class="form-group" action="funs.php" method="post">
               <label>Patient ID:</label><br>
               <input type="text" name="id" class="form-control" value= "<?php echo $id ?>"><br>
               <label>Full Name:</label><br>
               <input type="text" name="fname" class="form-control" value= "<?php echo $fname ?>"><br>
               <label>Age:</label><br>
               <input type="text" name="age" class="form-control" value= "<?php echo $age ?>"><br>
               <label>Phone:</label><br>
               <input type="text" name="phone" class="form-control" value= "<?php echo $phone ?>"><br>
               <label>Email:</label><br>
               <input type="text" name="email" class="form-control" value= "<?php echo $email ?>"><br>
               <label>City:</label><br>
               <input type="text" name="city" class="form-control" value= "<?php echo $city ?>"><br
               <label>Province:</label><br>
               <input type="text" name="province" class="form-control" value= "<?php echo $province?>"><br>
               <label>Patient Status :    (Previous Status:<?php echo $status ?>)</label>
               <select class="form-control" name="status">
                 <option value="Isolate">Isolate</option>
                 <option value="Qurantine">Qurantine</option>
                 <option value="Recovered">Recovered</option>
                 <option value="Death">Death</option>
                 </select><br>
                 <label>Isolation ID:</label><br>
                 <input type="text" name="isolation_id" class="form-control" value="<?php echo $isolation_id ?>"><br>
                 <label>Quarantine ID:</label><br>
                 <input type="text" name="quarantine_id" class="form-control" value="<?php echo $quarantine_id ?>"><br>
                 <input type="submit" class="btn btn-primary" name="update_patients" value="Update Patient">
             </form>
                 </div>
               </div>
         </div>
         <div/>

     </section>
