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
	<link rel="stylesheet" href="jquery-ui.css">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>

  <script>
  $(document).ready(function(){
  var minDate = new Date();
    $(".datepicker").datepicker({
		showAnim:'drop',
		numberOfMonth:1,
		minDate: minDate,
		dateFormat:'dd/mm/yy',
		onClose: function (selectedDate) {
		$(".datepicker").datepicker("option","minDate",selectedDate);
		}
  });
});
  </script>
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
					<li class ="active"><a href ="#">Book Appointment</a></li>
					<li><a href ="viewAppointment.php">View Appointment</a></li>
					<li><a href ="cancel_appointment.php">Cancel Appointment</a></li>
					<li><a href ="history.php">History</a></li>
					<li><a href ="logout_patient.php">Log Out</a></li>

				</ul>
			</div>			
		</div>
	</nav>
	</header>
	
	<div class="container">
	
	

<?php
	include('connection.php');
	if(isset($_POST['search']))
	{
		$city=$_POST['city'];
		$category=$_POST['category'];
		$sql="select doctor_id,doctor_name,gender,qualification,address,contact_no,email from doctor_detail where city='$city' or category='$category'";
		//echo $sql; die;
		$query=mysqli_query($link,$sql);
		
			while($result= mysqli_fetch_array($query))
			{
				$id=$result['doctor_id'];
				$doctor_id=0;	
  
				echo '<div class="col-md-4">
						<table class="table">';
				echo '<tr>
						<th>Doctor Name : '. $result['doctor_name']. '</th>
						</tr>';
				echo '<tr>
						<th>Gender : ' . $result['gender']. '</th>
					</tr>';		
				echo '<tr>
						<th>Qualification : ' . $result['qualification']. '</th>
					</tr>';
				echo '<tr>
						<th>Address : ' . $result['address']. '</th>
					</tr>';
				echo '<tr>
						<th>Contact No : ' . $result['contact_no']. '</th>
					</tr>';
				echo '<tr>
						<th>Email : ' . $result['email']. '</th>
					</tr>';
					
				echo '</table>
				
						
					<a href="book_doctor.php?doctor_id='.$id.'"><button type="submit" class="btn-info btn-lg">Book Appointment</button></a>
			 </div>'; 
				
			}
	}
?>	

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