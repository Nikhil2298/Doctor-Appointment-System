<?php
	include('connection.php');
	session_start();
	$pID=$_SESSION['id'];
	
	$dID=$_GET['doctor_id'];
	if(isset($_POST['book']))
	{
		$date=$_POST['date'];
		$time=$_POST['time'];
		$sql="insert into appointment set patient_id=$'pID',doctor_id='dID',date='$date',time=$'time'";
		$query=mysqli_query($link,$sql);
		
	}
	
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
	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="jquery.timepicker.css">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="jquery.timepicker.js"></script>

  <script>
  $(document).ready(function(){
  var minDate = new Date();
    $("#datepicker").datepicker({
		showAnim:'drop',
		numberOfMonth:1,
		minDate: minDate,
		dateFormat:'yy-mm-dd',
		onClose: function (selectedDate) {
		$("#datepicker").datepicker("option","minDate",selectedDate);
		}
  });
});

$(document).ready(function(){
    

$('#timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '9:00am',
    maxTime: '6:00pm',
    dynamic: false,
    dropdown: true,
    scrollbar: true
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
				<center>
			<div class="col-md-4">
			<?php 
				$doctor_sql="select doctor_name,gender,age,city,address,qualification,category,contact_no,email from doctor_detail where doctor_id='$dID'";
				$doctor_query=mysqli_query($link,$doctor_sql);
				$result=mysqli_fetch_array($doctor_query);
			?>
				<table>
					<tr>
						<th>Doctor Name : <?php echo $result['doctor_name']; ?></th>
					</tr>
					<tr>
						<th>Age : <?php echo $result['age']; ?></th>
					</tr>
					<tr>
						<th>Gender : <?php echo $result['gender']; ?></th>
					</tr>
					<tr>
						<th>Qualification : <?php echo $result['qualification']; ?></th>
					</tr>
					<tr>
						<th>Category : <?php echo $result['category']; ?></th>
					</tr>
					<tr>
						<th>City : <?php echo $result['city']; ?></th>
					</tr>
					<tr>
						<th>Address : <?php echo $result['address']; ?></th>
					</tr>
					<tr>
						<th>Contact No : <?php echo $result['contact_no']; ?></th>
					</tr>
					<tr>
						<th>Email : <?php echo $result['email']; ?></th>
					</tr>
					
				</table>
				<form method="post">
					<label>Date :</label>
						<input type="text" required id="datepicker" class="form-control" name="date">
						
					<label>Time :</label>
						<input type="text" required id="timepicker" class="form-control" name="time">
						<button type="submit" class="btn-success btn-lg" name="book">Book Appointment</button>
						<?php  
						
						if(isset($_POST['book']))
						{
							$status=0;
							$date=$_POST['date'];
							$time=$_POST['time'];
							$bookSql="insert into appointment set patient_id='$pID',doctor_id='$dID',time='$time',date='$date',status='$status'";
							//echo $bookSql; die;
							$book_query=mysqli_query($link,$bookSql);
							if($book_query>0)
							{
								header('location:viewAppointment.php');
							}
							else
							{
								echo "error";
							}
						}
						
						?>
				</form>
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