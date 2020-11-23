<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/slick.css">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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



	<body style="background:url(images/log.jpg);background-size: cover;">
	<div class="container-fluid" style="width:400px; margin-top:20px; ">
	<div class="card">
	<div class="card-body">
	  <center><h5 class="card-title">Login</h5></center>

	    <form class="form-group" action="function.php" method="post">
	        <label>Username </label><br>
	        <input type="text" name="email" class="form-control" placeholder="Enter Email"><br>
	        <label>Password </label><br>
	        <input type="password" name="pass" class="form-control" placeholder="Enter Password"><br>

	        <center><input type="submit" name="login_submit" class="btn btn-primary" value="LOGIN"  <br></center>
	    </form>

	</div>
	</div>
	</div>




<!---======================================All script file is add here==================================-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script> <script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
