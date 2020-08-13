<?php
	include('connection.php');
	session_start();
	$id=$_SESSION['id'];
	$sql="SELECT patient_name,age,gender,contact_no,email,date,time,status,appointment_id FROM appointment JOIN patient_detail ON appointment.patient_id = patient_detail.patient_id where doctor_id='$id'";
	$query=mysqli_query($link,$sql);
	
	
	?>



<!doctype html>
<html>
<head>
  <meta charset ="utf-8">
  <meta name ="viewport" content ="width=device-width, initial-scale=1">	
<title>Doctor Detail Page</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel ="stylesheet" href ="index.css">
	<style>
	.col-md-4
	{	
		border:2px solid black;
		margin :2px;
	}
	th
	{
		color:#1e66c3;
	}
	.status1 {
		color:red;
	}
	.status2 {
		color:green;
	}
	.row {
    margin-right: 0;
    margin-left: 0;
}
	.container {
		width:100%;
	}
	</style>
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
						<li><a href="Doctor_detail.php">My Detail</a></li>
						<li class="active"><a href="#">View Appointment</a></li>
						<li><a href="search_patient.php">Search Patient</a></li>
						<li><a href="prescription.php">Prescription</a></li>
						<li><a href="logout_doctor.php">Log Out</a></li>	
					</ul>
				</div>
			</div>
		</nav>
</header>
<div class="container">
				<center>
				
			<div style="overflow-x:auto;">
			<table class="table">
			<tr>
			<th>S.no</th>
			<th>Patient Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Contact No</th>
			<th>Email</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th colspan="2">Confirmed/Cancel<th>
			</tr>
			<?php 
			$count=1;
				while($result=mysqli_fetch_array($query))
				{	
					echo '<tr>';
					echo '<td>'.$count.'</td>';
					echo '<td>'.$result['patient_name'].'</td>';
					echo '<td>'.$result['age'].'</td>';
					echo '<td>'.$result['gender'].'</td>';
					echo '<td>'.$result['contact_no'].'</td>';
					echo '<td>'.$result['email'].'</td>';
					echo '<td>'.$result['date'].'</td>';
					echo '<td>'.$result['time'].'</td>';
					if($result['status']==0){
						echo '<td class="status1">Not Confirmed</td>';
					}
					else {
						echo '<td class="status2">Confirmed</td>';
					}
					
					echo '<td colspan="2"><a href="status.php?id='.$result['appointment_id'].'"><button class="btn-success btn-lg">Confirm</button></a>
					<a href="delete.php?id='.$result['appointment_id'].'"><button class="btn-danger btn-lg">Cancel</button></a>
					</td>';
					echo '</tr>';
					$count++;
				}
			?>
			</table>
			</div>
			
			</center>
		</div>

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