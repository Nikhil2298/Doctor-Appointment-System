

<!doctype html>
<html>
<head>
  <meta charset ="utf-8">
  <meta name ="viewport" content ="width=device-width, initial-scale=1">	
<title>Doctor Login Page</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel ="stylesheet" href ="index.css">
	<style>
		a	 {
			
			color:red;
		}
		.msg {
			color:red;
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
						<li><a href ="index.php">Home<span class ="glyphicon glyphicon-home"></span></a></li>

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

	</header>
	<div class="container transparentform">
		  <div class="form">
   
        <div id="login">
			<center><h2>Doctor Login</h2></center>
          <form action="" method="post">
		  
          
           <div class="field-wrap">
			<h3 class="lable">Username</h3>
            <input type="text" required placeholder="Enter Username" autocomplete="off" name="username"/>
           </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Password</h3>
            <input type="password" required placeholder="Enter Password" autocomplete="off" name="password"/>
          </div>
         <?php
			include('connection.php');
			session_start();
			if(isset($_POST['Login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select doctor_id from doctor_detail where user_id='$username' and password='$password'";
		//echo $sql; die;
		$query=mysqli_query($link,$sql);
		$count=mysqli_num_rows($query);
		$result=mysqli_fetch_array($query);
		
		if($count>0)
		{
			$_SESSION['id']=$result['doctor_id'];
			header('location:doctor_detail.php');
		}
		  
		  else
		  {
			  echo "<div class ='msg'><h5>Invalid User Id/Password</h5></div>";
		  }
	}
		  ?>
          <button type="submit" class="button button-block" name="Login">Log In</button>
		  <a href="doctor_signup.php"><h3 class="lable">Doctor Registration</h3></a>
		  
          
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