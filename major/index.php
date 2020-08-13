<!doctype html>
<html>
<head>
  <meta charset ="utf-8">
  <meta name ="viewport" content ="width=device-width, initial-scale=1">	
<title>Doctor patient</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Noto+Sans+KR" rel="stylesheet">
</head>
<body>
	<header>
		<nav class ="navbar">
			<div class ="container-fluid">

				<div class ="navbar-header">
					<button type ="button" class ="navbar-toggle" data-toggle ="collapse" data-target="#mycollapse">
						<span class ="icon-bar" color="red"></span>
						<span class ="icon-bar"></span>
						<span class ="icon-bar"></span>
					</button>
					<a class ="navbar-brand" href ="#">Doctor-Patient</a>
				</div>

				<div class ="collapse navbar-collapse" id ="mycollapse">
					<ul class ="nav navbar-nav">
						<li class ="active"><a href ="#">Home<span class ="glyphicon glyphicon-home"></span></a></li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Service<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Search_donor.php">Search donor</a></li>
									<li><a href="patient_login.php">Book Appointment</a></li>
									<li><a href="patient_login.php">Cancel Appointment</a></li>
								</ul>

						</li>
						<li><a href ="search_doctor.php">Find A Doctor</a></li>
						<li><a href ="donor_form.php">Be A Donor</a></li>
						<li><a href ="about.html">About us</a></li>
					</ul>
				</div>
			</div>
		</nav>

	</header>



 

<!-- Start Bootstrap Slider BODY section -->
	<div class="container">
		<div class="col-md-12 banner">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>


				<div class="carousel-inner">
					<div class="item active">
						<img src="photos/banner1.jpg" alt="Doctor-Patient" width="100%">
					</div>

					<div class="item">
						<img src="photos/banner2.jpg" alt="Doctor-Patient" width="100%">
					</div>

					<div class="item">
						<img src="photos/banner3.jpg" alt="Doctor-Patient" width="100%">
					</div>
					<div class="item">
						<img src="photos/banner4.jpg" alt="Doctor-Patient" width="100%">
					</div>
				</div>


				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

<!-- End Bootstrap Slider BODY section -->	
<!-- login -->
	<div class="container">
		<div class="col-md-3">
			<img class="img-responsive" src="photos/doctor-login.png" alt="Doctor Login">
			<center><h3>Doctor</h3></center>
			<a href="doctor_login.php"><img class="img-responsive" src="photos/login.jpg" alt="Doctor login"></a>
		</div>
		<div class="col-md-3">
			<img class="img-responsive" src="photos/patient_login.png" alt="Patient Login">
			<center><h3>Patient</h3></center>
			<a href="patient_login.php"><img class="img-responsive" src="photos/login.jpg" alt="Patient login"></a>
		</div>
		<div class="col-md-3">
			<img class="img-responsive" src="photos/donner.png" alt="Patient Login">
			<center><h3>Donner</h3></center>
			<a href="Search_donor.php"><img class="img-responsive" src="photos/search.jpg" alt="Patient login"></a>
		</div>
	</div>

<!--End  login-->	
	<nav class ="navbar">
		<div class ="container-fluid">
		<!-- feedback-->
			<footer class="navbar foot">
				<div class="container" color="white">
					<h2 class="text-center">CONTACT</h2>
					<div class="row">
						<div class="col-sm-5">
							<p>Contact us and we'll get back to you within 24 hours.</p>
							<p><span class="glyphicon glyphicon-map-marker"></span> Hamirpur, India</p>
							<p><span class="glyphicon glyphicon-phone"></span> +91 9557799742</p>
							<p><span class="glyphicon glyphicon-envelope"></span> DPportal@gmail.com</p> 
						</div>
						<div class="col-sm-7">
							<div class="row">
								<div class="col-sm-6 form-group">
									<input class="form-control" id="name" name="name" placeholder="Name" type="text" autocomplete="off" required>
								</div>
								<div class="col-sm-6 form-group">
									<input class="form-control" id="email" name="email" placeholder="Email" type="email" autocomplete="off" required>
								</div>
							</div>
							<textarea class="form-control" id="comments" name="comments" placeholder="Feedback" autocomplete="off" rows="5"></textarea><br>
							<div class="row">
								<div class="col-sm-12 form-group">
									<button class="btn btn-info pull-right" type="submit">Send</button>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>