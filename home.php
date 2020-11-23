<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/slick.css">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>

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
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bustime.php">Bus Time</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Booking</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
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





<section id="booktkt">
	<div class="container">
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<h3 class="h3_txt">
			Register form
		</h3>

		<form action="function.php" method="post">

			<div class="form-row">
      <input type="text" name="name" class="form-control custom_form" placeholder="Name"  required>
      </div>
    <div class="form-row">
      <input type="text" name="address" class="form-control custom_form" placeholder="Address"  required>
    </div>

	<div class="form-row">
		<div class="form-group col-md-6">
      <input type="" name="phone" class="form-control custom_form" placeholder="Phone number +88"  required>
    </div>

		<div class="form-group col-md-6">
      <input type="text" name="email" class="form-control custom_form" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group">
    <input type="text" name="city" class="form-control custom_form" placeholder="City"  required>
  </div>

  <div class="form-group">
    <input type="Password" name="pass" class="form-control custom_form" placeholder="Password"  required>
  </div>

	<center><input type="submit" name="register_submit" class="btn btn-primary" value="Register"  <br></center>
</form>
		</div>
		<div class="col-md-3"></div>

		</div>
	</div>
</section>




<!---======================================All script file is add here==================================-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
