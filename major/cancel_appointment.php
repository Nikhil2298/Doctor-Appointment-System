<?php
	include('connection.php');
	session_start();
	$pID=$_SESSION['id'];
	$sql="SELECT doctor_name,contact_no,address,email,date,time,status,appointment_id FROM appointment JOIN doctor_detail ON appointment.doctor_id = doctor_detail.doctor_id where patient_id='$pID'";
	$query=mysqli_query($link,$sql);
	
	
	?>

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
	

  

	<link rel ="stylesheet" href ="book.css">
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
					<li class="active"><a href ="#">Cancel Appointment</a></li>
					<li><a href ="history.php">History</a></li>
					<li><a href ="logout_patient.php">Log Out</a></li>

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
			<th>Doctor Name</th>
			<th>Address</th>
			<th>Contact No</th>
			<th>Email</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th>Action</th>
			</tr>
			<?php 
			$count=1;
				while($result=mysqli_fetch_array($query))
				{	
					echo '<tr>';
					echo '<td>'.$count.'</td>';
					echo '<td>'.$result['doctor_name'].'</td>';
					echo '<td>'.$result['address'].'</td>';
					echo '<td>'.$result['contact_no'].'</td>';
					echo '<td>'.$result['email'].'</td>';
					echo '<td>'.$result['date'].'</td>';
					echo '<td>'.$result['time'].'</td>';
					if($result['status']==0){
						echo '<td class="status1">Not Confirmed</td>';
					}
					else {
						echo '<td class="stauts2">Confirmed</td>';
					}
					
					echo '<td><a href="delete.php?id='.$result['appointment_id'].'"><button class="btn-danger btn-lg">Cancel</button></a></td>';
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
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-info pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>
</footer>
</body>
</html>