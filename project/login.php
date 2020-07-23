<!DOCTYPE html>
<html>

   <head>
     <title>Clinitical Login</title>
             <link rel = "icon" href =
             "images/logo.png"
             type = "image/x-icon">

     <meta charset="UTF-8">
<meta name="description" content="Clinitical.com provides detailed information about #Covid-19">
<meta name="keywords" content="coronavirus, healthcare, Covid-19">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/csslogin.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>

   <body >

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
             <a class="nav-link" href="#">Isolation Wards</a>
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
     <section id="login">
      <div class ="container">

           <div class="container" style=" width:400px;margin-top:60px;opacity:0.7;">
              <div class="card">
              <div class="card-body text-center">
                  <img style="widht:40px;height: 100px; margin:10px;padding:10px;align:center;"src="images/logo.png" class="center">
                  <h2 style="color:black; align:center;">Admin Login</h2>
                  <form  class="form-group" action="funs.php" method="post">
	              <label style="color:black;">Email:</label><br>
	              <input type="text" name="email" class="form-control" placefolder="enter email" required><br>
	              <label style="color:black;">Password:"</label><br>
	 	          <input type="password" name="password" class="form-control" placefolder="enter password" required><br>

		         <input type="Submit" name="login_submit" class="btn btn-primary center">
		         </form>
              </div>
	          </div>
  	      </div>
		 </div>




	 </div>
    </section>


    <!------------footer-------------->

    <section id="footer">
       <div class ="container text-center">
       <p>&copy Copyright 2020 All Rights Reserved - Clinitical.com </p>
     </div>
     </section>



   </body>



<html>
