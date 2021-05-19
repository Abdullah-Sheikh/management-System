<!DOCTYPE html>
<?php include("funs.php"); ?>
<html>

   <head>
     <title>Admin Panel</title>
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


   <body style="background: white;">



    <?php require_once "sidebar.php"; ?>


    <section id="admin_overview" >
      <div class="container">

        <div class="overviewH1">
         <div class ="container">
           <div class="card-body">
             <div class="overviewHCard" style="background:#202124;">
           <h3>Overview</h3>
             </div>
           </div>
         </div>
       </div>

       <div class="border_box" style="background: white">
        <div class="card-body"  >
          <div class="row admin_overview">
            <div class="col-md-4 text-center">
              <div class="row ">
                  <div class="col-md-2">
              <div class="vl" style="  border-left: 3px solid blue;"></div>
            </div>
              <div class="col-md-10 text-left">
               <h4>Patients</h4>
               <h6>total Patients: <?php get_patient_count (); ?></h6>

               <a href="viewpatients.php">Go to details</a>
             </div>
           </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="row ">
                  <div class="col-md-2 ">
              <div class="vl" style="  border-left: 3px solid green;"></div>
            </div>
              <div class="col-md-10 text-left">
            <h4>Quarantine Wards</h4>
            <h6>total Quarantine:<?php get_quaratine_count (); ?></h6>
            <a href="search_isolation_wards.php">Go to details</a>
             </div>
           </div>
            </div>
            <div class="col-md-4 text-center">
             <div class="row ">
           <div class="col-md-2 ">
          <div class="vl" style="  border-left: 3px solid yellow;"></div>
           </div>
             <div class="col-md-10 text-left">
              <h4>Isolation Wards</h4>
              <h6>total Isolation: <?php get_isolation_count (); ?></h6>
              <a href="search_quarantine_wards.php">Go to details</a>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
  </section>





  <section id="admin_patients" >
    <div class="container" >

      <div class="patientsH1" >
       <div class ="container" >
         <div class="card-body">
           <div class="patientsHCard" style="background:#202124;">
         <h3>Patients</h3>
           </div>
         </div>
       </div>
     </div>


     <div class="border_box1">
      <div class="card-body"  >
        <div class="row">

    <div class="col-md-4 text-center">
        <div class="card_Design">
      <span style=" font-family:cursive,sans-serif;font-style:bold;
     font-size:30px; color:#67336E;">
    <h4><b>Patients</b></h4>
    <h4><?php get_patient_count (); ?></h4>
</span>
</div>
</div>
      <div class="col-md-4 text-center">
          <div class="card_Design">
    <span style="color:#CC0404">
    <h4><b>Deadths</b></h4>
    <h4><?php recovered_count (); ?></h4>
  </span>
</div>
  </div>
  <div class="col-md-4 text-center">
  <div class="card_Design">
  <span style="color:#005D66">
<h4><b>Recovered</b></h4>
<h4> <?php death_count (); ?></h4>
</span>
</div>
</div>

</div>


  <!-- General info section end -->


   <!-- analytical section -->
      <h2 style="text-align:center;"><b>Analysis</b></h2>

      <div class="row">
        <div class="col-md-6">


          <div class="card_Design">
          <div class="card-body">
            <h5 style="">Geological</h5>
            <hr/>
          <p>Maximum cases in City :<span style="color:#CC0404"><b> <?php get_max_patient_city (); ?></b></span></p>
           <p>Minimum cases in City :  <span style="color:#005D66"><b> <?php get_min_patient_city (); ?></b></span></p>
        </div>

    </div>
   </div>
   <div class="col-md-6">


     <div class="card_Design">
     <div class="card-body">
       <h5 style="">Facts & Figures</h5>
       <hr/>
       <p>Average Age :<span style="color:#CC0404"><b> <?php get_avg_patient_age (); ?></b></span></p>
     <p>Maximum Age :<span style="color:#CC0404"><b> <?php get_max_patient_age (); ?></b></span></p>
      <p>Minimum Age:  <span style="color:#005D66"><b> <?php get_min_patient_age (); ?></b></span></p>
   </div>
 </div>
 </div>
 </div>



   <div class="row">
     <div class="col-md-6">


       <div class="card_Design">
       <div class="card-body">
         <h5 >Covid-19 cases</h5>
         <hr/>
       <p>Punjab :<span style="color:#CC0404"><b> <?php get_patient_count (); ?></b></span></p>
        <p>Sindh :  <span style="color:#005D66"><b> <?php get_patient_count (); ?></b></span></p>
     </div>
 </div>
</div>

     <div class="col-md-6" >
        <div class="card_Design">
       <div id="chartContainer" style="height: 300px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>
     </div>
     </div>





   </div>
 </div>

   </div>
 </section>





<!-- Isolation Section Start -->
     <section id="admin_isolation">
       <div class="container" >
         <div class="isolationH1">
          <div class ="container">
            <div class="card-body">
              <div class="isolationHCard">
            <h3>Isolation </h3>
              </div>
            </div>
          </div>
        </div>
 <!-- Border start -->
        <div class="border_box2" >
         <div class="card-body"  >
<!-- Row start -->
    <div class="row">
        <!-- Add hospital card start-->

           <div class="col-md-4 text-center">
               <div class="card_Design">
                   <img src="https://img.icons8.com/nolan/64/hospital.png/"  style="width:50px;height:50px; align:left;">
                   <h4>Add Ward</h4>
                   <h6>total Wards:<?php get_isolation_count(); ?></h6>
                    <h6><a href="isolation_wards.php">Go to page</a></h6>
              </div>
          </div>
            <!-- Add hospital card end-->

            <!-- Add hospital card start-->

                 <div class="col-md-4 text-center">
                   <div class="card_Design">
                     <img src="https://img.icons8.com/dusk/64/000000/hospital.png"  style="width:50px;height:50px; align:left;">
                       <h4>View and Search Wards</h4>
                          <h6><a href="search_isolation_wards.php">Go to page</a></h6>
                  </div>
              </div>
                <!-- Add hospital card end-->

                <!-- Add hospital card start-->

                     <div class="col-md-4 text-center">
                       <div class="card_Design">
                          <img src="https://img.icons8.com/fluent/48/000000/hospital.png" style="width:50px;height:50px; align:left;">
                           <h4>Delete Ward</h4>
                           <h6><a href="search_isolation_wards.php">Go to page</a></h6>
                      </div>
                  </div>
                    <!-- Add hospital card end-->
  </div>
     <!-- Row end -->


     <!-- Row start -->
         <div class="row">
             <!-- Doctors card start-->

                <div class="col-md-6 text-center">
                    <div class="card_Design">
                      <img src="https://img.icons8.com/color/48/000000/doctor-male--v1.png"  style="width:50px;height:50px; align:left;">
                        <h4>Doctors</h4>
                        <h6>total :<?php get_patient_count (); ?></h6>
                         <hr/>
                        <img src="https://img.icons8.com/nolan/64/hospital-room.png"  style="width:50px;height:50px; align:left;">
                          <h4>Patients</h4>
                          <h6>total :<?php isolate_count (); ?></h6>

                   </div>
               </div>
                 <!-- Doctors card end-->

                 <!--    Patients Charts card start-->

                      <div class="col-md-6 text-center">
                        <div class="card_Design">
                          <div id="piechart" ></div>

                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                       </div>
                   </div>
                     <!-- Patients Charts  card end-->


       </div>
          <!-- Row end -->
        </div>
     </div>
     <!-- Border end -->
         </div>
   </section>
   <!-- Isolation Section End -->


   <!-- Quarantine Section Start -->
        <section id="admin_quarantine">
          <div class="container" >
            <div class="quarantineH1">
             <div class ="container">
               <div class="card-body">
                 <div class="quarantineHCard">
               <h3>Quarantine </h3>
                 </div>
               </div>
             </div>
           </div>
    <!-- Border start -->
           <div class="border_box3" >
            <div class="card-body"  >
   <!-- Row start -->
       <div class="row">
           <!-- Add quarantine card start-->

              <div class="col-md-4 text-center">
                  <div class="card_Design">
                      <img src="https://img.icons8.com/nolan/64/hospital.png/"  style="width:50px;height:50px; align:left;">
                      <h4>Add Ward</h4>
                      <h6>total Wards:<?php get_quaratine_count (); ?></h6>
                       <h6><a href="quarantine_wards.php">Go to page</a></h6>
                 </div>
             </div>
               <!-- Add quarantine card end-->

               <!-- View quarantine card start-->

                    <div class="col-md-4 text-center">
                      <div class="card_Design">
                        <img src="https://img.icons8.com/nolan/64/hospital-2.png"  style="width:50px;height:50px; align:left;">
                          <h4>View and Search Wards</h4>
                             <h6><a href="search_quarantine_wards.php">Go to page</a></h6>
                     </div>
                 </div>
                   <!-- view quarantine  card end-->

                   <!-- del quarantine card start-->

                        <div class="col-md-4 text-center">
                          <div class="card_Design">
                             <img src="https://img.icons8.com/fluent/48/000000/hospital.png" style="width:50px;height:50px; align:left;">
                              <h4>Delete Ward</h4>
                              <h6><a href="search_quarantine_wards.php">Go to page</a></h6>
                         </div>
                     </div>
                       <!-- del quarantine card end-->
     </div>
        <!-- Row end -->


        <!-- Row start -->
            <div class="row">
                <!-- Doctors card start-->

                   <div class="col-md-6 text-center">
                       <div class="card_Design">
                         <img src="https://img.icons8.com/color/48/000000/doctor-male--v1.png"  style="width:50px;height:50px; align:left;">
                           <h4>Doctors</h4>
                           <h6>total :<?php get_patient_count (); ?></h6>
                            <hr/>
                           <img src="https://img.icons8.com/nolan/64/hospital-room.png"  style="width:50px;height:50px; align:left;">
                             <h4>Patients</h4>
                             <h6>total :<?php quarantine_count (); ?></h6>


                      </div>
                  </div>
                    <!-- Doctors card end-->

                    <!--    Patients Charts card start-->

                         <div class="col-md-6 text-center">
                           <div class="card_Design">
                             <div id="piechart1" ></div>
                         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                          </div>
                      </div>
                        <!-- Patients Charts  card end-->


          </div>
             <!-- Row end -->
           </div>
        </div>
        <!-- Border end -->
            </div>
      </section>
      <!-- quarantine Section End -->







<!--                Patients section js ---->

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
</script>




   <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Record', 'Patients'],
  ['Isolate', <?php isolate_count (); ?>],
  ['Recovered', <?php recovered_count (); ?>],
  ['Death', <?php death_count (); ?>],

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Patients Record', 'width':400, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Record', 'Patients'],
['Quarantine', <?php quarantine_count (); ?>],
['Recovered', <?php recovered_count (); ?>],
['Death', <?php death_count (); ?>],

]);

// Optional; add a title and set the width and height of the chart
var options = {'title':'Patients Record', 'width':400, 'height':300};

// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
chart.draw(data, options);
}
</script>



   </body>






   </html>
