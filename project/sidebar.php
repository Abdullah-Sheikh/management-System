<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Clintical</title>
            <link rel = "icon" href =
            "images/logo.png"
            type = "image/x-icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

      <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="background: white;">
                <h3 style="color: black;">Clinitical.com</h3>
                <!-- <img src="logo1.png" alt="logo"> -->
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" >   <i class="fa fa-info-circle" style="margin-right:5px;" ></i>Patients</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu0">
                        <li>
                            <a href="addpatients.php"><i class="fa fa-plus-square" aria-hidden="true" style="margin-right:5px;"></i>Add</a>
                        </li>
                        <li>
                            <a href="viewpatients.php"><i class="fa fa-search-plus" aria-hidden="true" style="margin-right:5px;"></i>View and Search</a>
                        </li>
                        <li>
                            <a href="viewpatients.php"><i class="fa fa-pencil" aria-hidden="true" style="margin-right:5px;"></i>Update</a>
                        </li>
                        <li>
                            <a href="logpatients.php"> <i class="fa fa-history" aria-hidden="true" style="margin-right:5px;"></i> logs</a>
                        </li>
                    </ul>
                </li>
                <li>

                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" ><i class="fa fa-hospital-o" style="margin-right:5px;"></i> Isolation Wards</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li>
                            <a href="isolation_wards.php"><i class="fa fa-plus-square" aria-hidden="true" style="margin-right:5px;"></i>Add</a>
                        </li>
                        <li>
                            <a href="search_isolation_wards.php"><i class="fa fa-search-plus" aria-hidden="true" style="margin-right:5px;"></i>View and Search</a>
                        </li>
                        <li>
                            <a href="update_isolation_wards.php"><i class="fa fa-pencil" aria-hidden="true" style="margin-right:5px;"></i>Update</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" ><i class="fa fa-h-square" style="margin-right:5px;"></i> Quarantine Wards</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                            <a href="quarantine_wards.php"><i class="fa fa-plus-square" aria-hidden="true" style="margin-right:5px;"></i>Add</a>
                        </li>
                        <li>
                            <a href="search_quarantine_wards.php"><i class="fa fa-search-plus" aria-hidden="true" style="margin-right:5px;"></i>View and Search</a>
                        </li>
                        <li>
                            <a href="update_quarantine_wards.php"><i class="fa fa-pencil" aria-hidden="true" style="margin-right:5px;"></i>Update</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="login.php"><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:5px;"></i>Logout </a>
                </li>
            </ul>
        </nav>



               <!-- Page Content  -->
               <div id="content">
                   <div class="menu-header">
                       <button type="button" id="sidebarCollapse" class="btn menu-btn">
                           <i class="fa fa-bars" style="font-size:28px"></i>
                       </button>
                       <span class="menu-text">Dashboard</span>
                   </div>
               </div>
                 </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>
