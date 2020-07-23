<!DOCTYPE html>
<html>
<head>
<title>Clintical</title>
        <link rel = "icon" href =
        "images/logo.png"
        type = "image/x-icon">

<link rel="stylesheet" href="css/navcss.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>

<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="adminpanel.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:white!important; z-index:10;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Patients
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="addpatients.php">Add</a>
            <a class="dropdown-item" href="viewpatients.php">Search and View</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="viewpatients.php">Delete</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"style="color:white!important;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Isolation
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="isolation_wards.php">Add</a>
            <a class="dropdown-item" href="search_isolation_wards.php">Search and View</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="search_isolation_wards.php">Delete</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:white!important;"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quarantine
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="quarantine_wards.php">Add</a>
            <a class="dropdown-item" href="search_quarantine_wards.php">Search and View</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="search_quarantine_wards.php">Delete</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>
</section>

</body>
</html>
