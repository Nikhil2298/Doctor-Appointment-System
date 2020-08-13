<?php
	include('connection.php');
	session_start();
	$id=$_SESSION['id'];
	$sql="select doctor_name,age,gender,qualification,category,city,email,address,contact_no from doctor_detail where doctor_id='$id'";
	//echo $sql die;
	$query=mysqli_query($link,$sql);
	$result=mysqli_fetch_array($query);
	$count=mysqli_num_rows($query);
	if($count>0)
	{
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
	</head>
<body>
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
						<li class="active"><a href="#">My Detail</a></li>
						<li><a href="doctor_appointment.php">View Appointment</a></li>
						<li><a href="search_patient.php">Search Patient</a></li>
						<li><a href="prescription.php">Prescription</a></li>
						<li><a href="logout_doctor.php">Log Out</a></li>	
					</ul>
				</div>
			</div>
		</nav>

	<div class="container">
		<center>
		<div class="col-md-6">
				<h2 class="heading"><font face="cooper">Doctor Profile</font></h2>
			<table class="table">
				<tr>
				<th>Doctor Name :</th>
				<td><?php echo $result['doctor_name']; ?></td>
				</tr>
				<tr>
				<th>Age :</th>
				<td><?php echo $result['age']; ?></td>
				</tr>
				<tr>
				<th>Gender :</th>
				<td><?php echo $result['gender']; ?></td>
				</tr>
				<tr>
				<th>Qualification :</th>
				<td><?php echo $result['qualification']; ?></td>
				</tr>
				<tr>
				<th>Category :</th>
				<td><?php echo $result['category']; ?></td>
				</tr>
				<tr>
				<th>City :</th>
				<td><?php echo $result['city']; ?></td>
				</tr>
				<tr>
				<th>Contact No :</th>
				<td><?php echo $result['contact_no']; ?></td>
				</tr>
				<th>Email :</th>
				<td><?php echo $result['email']; } ?></td>
				</tr>
			</table>
			<a href="edit_doctor.php"><button class="btn-primary btn-sm">Edit</button></a>
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