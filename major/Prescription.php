<?php 
	include('connection.php');
	session_start();
	$Did=$_SESSION['id'];
	if(isset($_POST['submit']))
	{
		$pid=$_POST['patient_id'];
		$pname=$_POST['patient_name'];
		$treat=$_POST['treated'];
		$med=$_POST['medicine'];
		$des=$_POST['description'];
		$date=$_POST['date'];
		$sql="insert into history set patient_id='$pid',name='$pname',doctor_id='$Did',date='$date',treatment='$treat',medicine='$med',description='$des'";
		//echo $sql; die;
		$query=mysqli_query($link,$sql);
	}
	?>

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
	<link rel="stylesheet" href="jquery-ui.css">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
	<link rel ="stylesheet" href ="prescription.css">
	<script>
	$(document).ready(function(){
    
$('#date').datepicker({ dateFormat :"dd-mm-yy"}).datepicker("setDate", new Date());

	});</script>
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
						<li><a href="search_patient.php">Search Patient</a></li>
						<li class="active"><a href="#">Prescription</a></li>
						<li><a href="logout_doctor.php">Log Out</a></li>	
					</ul>
				</div>
			</div>
		</nav>
</header>
	<div class="container transparentform">
		  <div class="form">
   
        <div id="login">
			<center><h2>Prescription</h2></center>
          <form action="" method="post">
		  
          
           
		   
		   <div class="field-wrap">
			<h3 class="lable">Patient Id :</h3>
            <input class="wid" type="text" required autocomplete="off" name="patient_id"/>
           </div>
		   
		   <div class="field-wrap">
			<h3 class="lable">Patient Name :</h3>
            <input class="wid" type="text" required autocomplete="off" name="patient_name"/>
           </div>
		   
		   <div class="field-wrap">
			<h3 class="lable">Date :</h3>
            <input class="wid" type="text" id="date" required autocomplete="off" name="date"/>
           </div>
		   
		   <div class="field-wrap">
			<h3 class="lable">Treated For :</h3>
            <input class="wid" type="text" required autocomplete="off" name="treated"/>
           </div>
		   
		   <div class="field-wrap">
			<h3 class="lable">Medician :</h3>
            <textarea class="wid" type="text" required autocomplete="off" name="medicine"></textarea>
           </div>
		   
		   <div>
		   <div class="field-wrap">
			<h3 class="lable">Description :</h3>
            <textarea class ="wid" type ="text" name="description" required></textarea>
           </div>
		   
         
          <button type="submit" class="button button-block" name="submit">Submit</button>
		  
		  
          
          </form>

        </div>
        
      </div>
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