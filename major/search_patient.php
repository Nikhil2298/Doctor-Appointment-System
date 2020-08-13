


<!doctype html>
<html>
<head>
  <meta charset ="utf-8">
  <meta name ="viewport" content ="width=device-width, initial-scale=1">	
<title>Prescription</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel="stylesheet" href="search.css">
	
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
						<li><a href="doctor_appointment.php">View Appointment</a></li>
						<li class="active"><a href="#">Search Patient</a></li>
						<li><a href="Prescription.php">Prescription</a></li>
						<li><a href="logout_doctor.php">Log Out</a></li>	
					</ul>
				</div>
			</div>
		</nav>
</header>
<!--Search doctor-->
	<div class ="container detail">
<center>
<img src ="photos/doctor_search.jpg" alt="Search donor">
<form  method ="post">
<h2 class="lable">Search Patient</h2>
<br>
<label>Patient Id :</label>
<input class="inp" type="number" name="id" required>

<button class ="btn-info btn-lg" name ="search">Search<span class ="glyphicon glyphicon-search"></span></button>

</form>
</div>
</center>

<?php
	include('connection.php');
	if(isset($_POST['search']))
	{
	$id=$_POST['id'];
	$sql="select patient_id,patient_name,age,gender,blood_group,email from patient_detail where patient_id='$id'";
	//echo $sql die;
	$query=mysqli_query($link,$sql);
	$result=mysqli_fetch_array($query);
	$count=mysqli_num_rows($query);
	
if($count>0)
	{ 
echo '
	<table>
	<tr>
	<th>Patient Id : '.$result['patient_id'].'</th>
	</tr>
	<tr>
	<th>Patient Name : '.$result['patient_name'].'</th>
	</tr>
	<tr>
	<th>Age : '.$result['age'].'</th>
	</tr>
	<tr>
	<th>Gender : '.$result['gender'].'</th>
	</tr>
	<tr>
	<th>Blood Group : '.$result['blood_group'].'</th>
	</tr>
	<tr>
	<th>Email : '.$result['email'].'</th>
	</tr>
	<table>
	';
	}
else {
	echo '<p>Wrong Patient Id</p>';
}
	
	
	$history = "select date,treatment,medicine,description from history where patient_id='$id'";
	$queryhis=mysqli_query($link,$history);
	$count1=1;
	if(mysqli_fetch_row($queryhis) == false)
		{
			echo "<center> <h3>NO Record Available</h3> </center>";
		}
		else
		{
		
		echo '<center>
<div style="overflow-x:auto;">
<table class="table">
				<tr>
					<th>S.NO</th>
					<th>Date</th>
					<th>Treated For</th>
					<th>Medicine</th>
					<th>Description</th>
				</tr>';
		$n = mysqli_query($link,$history);		
		while($his =mysqli_fetch_array($n))
		{
			echo '<tr>
					<td>'.$count1.'</td>
					<td>'.$his['date'].'</td>
					<td>'.$his['treatment'].'</td>
					<td>'.$his['medicine'].'</td>
					<td>'.$his['description'].'</td>
				</tr>
				
				';
				$count1++;
		}
		echo '</table>
				</div>
				</center>';
		}
		}
?>
</div>








<footer class ="navbar navbar-inverse">
<div class="container">

  <div class="row">
    <div class="col-sm-5">
	  <h2 class="text-center">CONTACT</h2>
      <p><span class="glyphicon glyphicon-map-marker"></span> Himachal, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
	  </div>
</div>
</footer>
</body>
</html>