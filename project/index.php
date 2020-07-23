<!DOCTYPE html>
<?php include("funs.php"); ?>

<html>
<head>
<title>Clintical</title>
        <link rel = "icon" href =
        "images/logo.png"
        type = "image/x-icon">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style>
/* Team members */

#teamMember
{
	padding-top: 50px;
	padding-bottom: 50px;
	color:#555;
}
#teamMember h1
{
	text-align: center;
	color:#555!important;
	padding-bottom: 10px;
}
#teamMember h1::after
{
	content: '';
	background: #007bff;
	display: block;
	height: 3px;
	width:170px;
	margin:20px auto 5px;
}
.profile-pic .img-box
{
	opacity:1;
	display:block;
	position: relative;
}
.profile-pic .img-box img
{
	height: 250px;
	width: 200px;
	filter:grayscale(0.6);
}
.profile-pic .img-box img:hover
{
	filter:grayscale(0);
	cursor: pointer;
}
.profile-pic h2
{
	font-size: 22px;
	font-weight: bold;
	margin-top: 15px;
	color:#007bff!important;
}
#teamMember .fa
{
	height:25px;
	width:25px;
	color:#007bff !important;
	background:#fff;
	padding:4px;
	border-radius:50%;
}
.img-box ul
{
	padding:15px 0;
	position:absolute;
	z-index:2;
	bottom:0;
	left:50%;
	transform: translateX(-50%);
	opacity: 0;

}
.img-box ul li
{
	padding: 5px;
	display:inline-block;
}
.img-box:hover ul
{
	opacity:1;
}
.img-box ul , .img-box ul li  {
		transition: 0.5s;
}
</style>

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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Statistics">Statistics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<section>
<!--Slider--------->
<div id ="slider">

<div id="headerSlider" class="my-carousel carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="images/slide1.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>#Covid-19</h5>
        <p>It is dangerous but not injuries.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Wear a Mask</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item"  >
      <img src="images/slide3.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Take a Healthy diet</h5>
        <p>.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>

</section>


<!-- Statistics------------------>
<div class="ah1">
  <h1 style="font-size:80px;">Statistics</h1>
</div>
<section id="Statistics"  >

 <div class="container">

 <div class="h1a">
 <div class="row">

     <div class="col-md-4 text-center">
     <h2>#Covid-19 in Pakistan</h2>
	 <h3>CONFIRMED CASES</h3>
	 <h2><span class="count" style=" font-family:cursive,sans-serif;font-style:bold;
	 font-size:80px;text-align:start; color:#67336E;" >27,474</span></h2>

    </div>

	 <div class="col-md-2 text-center">
	             <span style="color:#CC0404">
				  <h3><b>Deaths</b></h3>
				  <h2>723</h2>
				  </span>
				   <span style="color:#005D66">
				   <h3><b>Recovered</b></h3>
				  <h2>7,723</h2>
				  </span>
				</div>


				<div class="col-md-2 text-center">
				  <h3><u>Sindh</u></h3>
				  <h2>9,691</h2>
				   <h3><u>Punjab</u></h3>
				  <h2>10,471</h2>
				</div>

				<div class="col-md-2 text-center">
				  <h3><u>kPK</u></h3>
				  <h2>4,327</h2>
				   <h3><u>Balochistan</u></h3>
				  <h2>1,876</h2>
				</div>

				<div class="col-md-2 text-center">
				  <h3><u>Islamabad </u></h3>
				  <h2>427</h2>
				   <h3><u>AJK</u></h3>
				  <h2>976</h2>
				</div>

 </div>

 </div>
 <div id="particles-js">
 </div>
 </section>


<!-------About---------->
<section id ="about">
<div class="container">
<div class ="row">
<div class="col-md-6">
     <h2>About Us</h2>
	 <div class="about-content">
	 <p>For more information about #covid-19</p>

	 </div>

 <a href="prevention.php" class="btn btn-primary">Read more ...</a>


</div>
<div class="col-md-6 patients-progress-analysis">

             <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>
        </div>
   </div>

</section>

<!-----------------Covid-19 Servies-------------->

   <section id="services">
        <div class ="container">
		   <h1>Covid-19 Services</h1>
		   <div class="row services">

		       <div class="col-md-3 text-center">
             <a href="prevention.php" style="color:white;">
			      <div class="icon">
				 <i class="fa fa-info-circle" ></i>
				  </div>
				  <h3>Info Desk</h3>
				  <p>In this tab we provide complete
				  information about Covid-19</p>
        </a>
				</div>

				 <div class="col-md-3 text-center">
           <a href="quarantine_wardsu.php" style="color:white;">
			      <div class="icon">
				  <i class="fa fa-h-square" ></i>
				  </div>
				  <h3>Qurantine Wards</h3>
				  <p>In this tab we provide complete
				  information about Covid-19 Qurantine wards</p>
        </a>
				</div>

				 <div class="col-md-3 text-center">
           <a href="isolation_wardsu.php" style="color:white;">
           <div class="icon">

				<i class="fa fa-hospital-o" ></i>
				  </div>
				  <h3>Isolation Wards</h3>
				  <p>In this tab we provide complete
				  information about Covid-19 isolation wards</p>
        </a>
				</div>

				 <div class="col-md-3 text-center">
            <a href="prevention.php" style="color:white;">
			      <div class="icon">
				 <i class="fa fa-user-md" ></i>
				  </div>
				  <h3>precautions</h3>
				  <p>In this tab we provide complete
				  information about Covid-19</p>
          </a>
				</div>
			</div>
		</div>
    </section>

<!-- team members -->
    <section id="teamMember">
      <div class="container">
        <h1>Our team </h1>

        <div class="row">
          <div class="col-md-4 profile-pic text-center">
           <div class="img-box">
             <img src="images/huzaifa.jpg" class="img-responsive">
            <ul>
              <a href="#"><li><i class="fa fa-facebook"></i></li> </a>
                <a href="#"><li><i class="fa fa-twitter"></i></li> </a>
              <a href="#"><li><i class="fa fa-linkedin"></i></li> </a>
              </ul>
           </div>
           <h2>Huzaifa Shakeel</h2>
           <p style="font-style:italic;"><i class="fa fa-university"  style="margin-right:5px;"></i>Student at Fast NUCES </p>
           <p ><i class="fa fa-envelope"  style="margin-right:5px;"></i><a style="margin-left:5px;" href="#">f180318@nu.edu.pk</a></p>

          </div>

          <div class="col-md-4 profile-pic text-center">
           <div class="img-box">
             <img src="images/abdullah.jpg" class="img-responsive">
            <ul>
              <a href="https://web.facebook.com/sheikhabdullahSEO" target="_blank">
                <li><i class="fa fa-facebook"></i></li> </a>
                <a href="https://twitter.com/Abdullah_shk_" target="_blank"><li><i class="fa fa-twitter"></i></li> </a>
              <a href="https://www.linkedin.com/in/muhammad-abdullah-b50862182/" target="_blank">
                <li><i class="fa fa-linkedin"></i></li> </a>
              </ul>
           </div>
           <h2>Abdullah Sheikh</h2>
           <p style="font-style:italic;"><i class="fa fa-university"  style="margin-right:5px;"></i>Student at Fast NUCES </p>
           <p ><i class="fa fa-envelope"  style="margin-right:5px;"></i><a style="margin-left:5px;" href="#">f180243@nu.edu.pk</a></p>
          </div>

          <div class="col-md-4 profile-pic text-center">
           <div class="img-box">
             <img src="images/asaad.jpg" class="img-responsive" >
            <ul>
              <a href="#"><li><i class="fa fa-facebook"></i></li> </a>
                <a href="#"><li><i class="fa fa-twitter"></i></li> </a>
              <a href="#"><li><i class="fa fa-linkedin"></i></li> </a>
              </ul>
           </div>
           <h2>Assad Ramish</h2>
           <p style="font-style:italic;"><i class="fa fa-university"  style="margin-right:5px;"></i>Student at Fast NUCES </p>
           <p ><i class="fa fa-envelope"  style="margin-right:5px;"></i><a style="margin-left:5px;" href="#">f180394@nu.edu.pk</a></p>

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

  <!-- scripts -->
  <script src="js/particles.min.js"></script>
  <script src="js/app.js"></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>  <script src="jquery.counterup.min.js"></script>

<script src="js/smooth-scroll.js"></script>
 <script>
	var scroll = new SmoothScroll('a[href*="#"]');

</script>
<script>
$('.count').counterUp({
    delay: 10,
    time: 4000
});
</script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Covid 19 cases in Pakistan"
	},
	axisY: {
		title: "Patients",
		suffix: " ",
		includeZero: false
	},
	axisX: {

	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#\"\"",
		dataPoints: [
			{ label: "Isolate", y: <?php isolate_count (); ?> },
			{ label: "Quarantine", y: <?php quarantine_count (); ?> },
			{ label: "Recovered", y: <?php recovered_count (); ?> },
			{ label: "Deadth", y: <?php death_count (); ?> }

		]
	}]
});
chart.render();

}
</script

</body>

</html>
