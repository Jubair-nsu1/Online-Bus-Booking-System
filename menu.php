<!doctype html>
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

<body>

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






<section id="full_slider">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/bus.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/hyndai.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/images.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>



<!---======================================All script file is add here==================================-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
