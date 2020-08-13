




<!doctype html>
<html>
<head>
  <meta charset ="utf-8">
  <meta name ="viewport" content ="width=device-width, initial-scale=1">	
<title>Find Doctor</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel ="stylesheet" href ="index.css">
	</head>
<body>

<header>
	<nav class ="navbar">
		<div class ="container-fluid">

			<div class ="navbar-header">
				<button type ="button" class ="navbar-toggle" data-toggle ="collapse" data-target="#myDetail">
					<span class ="icon-bar"></span>
					<span class ="icon-bar"></span>
					<span class ="icon-bar"></span>
				</button>	
				<a class ="navbar-brand" href ="#">Doctor-Patient</a>
			</div>

			<div class ="collapse navbar-collapse" id ="myDetail">
				<ul class ="nav navbar-nav">
					<li><a href ="patient_detail.php">My Detail</a></li>
					<li><a href ="find_doctor.php">Book Appointment</a></li>
					<li><a href ="viewAppointment.php">View Appointment</a></li>
					<li><a href ="cancel_appointment.php">Cancel Appointment</a></li>
					<li class ="active"><a href ="#">History</a></li>
					<li><a href ="logout_patient.php">Log Out</a></li>

				</ul>
			</div>			
		</div>
	</nav>
	</header>
	
<?php 
	include('connection.php');
	session_start();
	$id=$_SESSION['id'];
	$sql="select doctor_name,name,address,date,treatment,medicine,description from history join doctor_detail on history.doctor_id=doctor_detail.doctor_id where patient_id='$id'";
	$query=mysqli_query($link,$sql);
	$count=1;
	if(mysqli_fetch_row($query) == false)
		{
			echo "<center> <h3>NO Record is available</h3> </center>";
		}
	else
	{
		echo '<center>
				<div style="overflow-x:auto;">
				<table class="table">
				<tr>
				<th>S.no</th>
				<th>Doctor Name</th>
				<th>Address</th>
				<th>Patient Name</th>
				<th>Date</th>
				<th>Treated For</th>
				<th>Medicine</th>
				<th>Description</th>
				</tr>
		';
		$n=mysqli_query($link,$sql);
	while($result=mysqli_fetch_array($n))
	{
		echo '
				<tr>
				<td>'.$count.'</td>
				<td>'.$result['doctor_name'].'</td>
				<td>'.$result['address'].'</td>
				<td>'.$result['name'].'</td>
				<td>'.$result['date'].'</td>
				<td>'.$result['treatment'].'</td>
				<td>'.$result['medicine'].'</td>
				<td>'.$result['description'].'</td>
				</tr>
		';
		$count++;
	}
	echo '</table>
	</div>
	</center>';
	}
?>	
	
	
	
	
	
			<!-- feedback-->
		<footer class="navbar foot">
<div class="container">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Hamirpur, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9557799742</p>
      <p><span class="glyphicon glyphicon-envelope"></span> himtour@gmail.com</p> 
    </div>
    
  </div>
</div>
</footer>
</body>
</html>