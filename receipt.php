<!doctype html>
<?php include("function.php");?>
<html>
<head>
<meta charset="utf-8">
<title>My Account</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/slick.css">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php
	$conn =mysqli_connect("localhost", "root","","bts");

	session_start();
	if (!(isset($_SESSION['email']))) {
	    session_destroy();
	    header("location:home.php");
	} else {
	    $name     = $_SESSION['name'];
	    $email = $_SESSION['email'];

	    $conn =mysqli_connect("localhost", "root","","bts");
			echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a></span>';
	}

	?>


<section class="navbar_full">

<div class="nav">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="images/buslogo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse item_custom" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


      <li class="nav-item">
        <a class="nav-link" href="menu.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bus Time</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receipt.php">Booking History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booking.php">Booking</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

    </ul>

  </div>
</nav>
</div>
</section>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Departure Date</th>
      <th scope="col">Bus Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Departure Time</th>
    </tr>
  </thead>
  <tbody>
    <?php get_details(); ?>
  </tbody>
</table>




<!---======================================All script file is add here==================================-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
