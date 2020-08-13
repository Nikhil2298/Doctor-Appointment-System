<?php
	include('connection.php');
	session_start();
	$id=$_SESSION['id'];
	$sql="select * from doctor_detail where doctor_id='$id'";
	//echo $sql die;
	$query=mysqli_query($link,$sql);
	$result=mysqli_fetch_array($query);
	$count=mysqli_num_rows($query);
	
	
	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$checkbox1 = $_POST['qual'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
		
		$category=$_POST['category'];
		$address=$_POST['address'];
		$state=$_POST['state'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sqlupdate = "update doctor_detail set doctor_name='$name', age='$age', gender='$gender', qualification='$chk', category='$category', city='$state', address='$address', contact_no='$contact', email='$email', user_id='$username', password='$password'";
		//echo $sql; die;
		$update=mysqli_query($link,$sqlupdate);
		if($update>0)
		{
			header('location:doctor_detail.php');
		}
		else{
			
			echo "Error";
		}
	}
	
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
	<link rel ="stylesheet" href ="signup.css">
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
		
		
		<div class="container transparentform">
		  <div class="form">
   
        <div id="login">
			<center><h2>Edit Your Detail</h2></center>
          <form action="" method="post" onsubmit="return checkForm(this);">
		  
          
           <div class="field-wrap">
			<h3 class="lable">Doctor Name</h3>
            <input class="wid" type="text" required placeholder="Enter Your Name" autocomplete="off" name="name" value="<?php echo $result['doctor_name']; ?>"/>
           </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Age</h3>
            <input class="wid" type="number" max="85" min="23" required placeholder="Enter Your Age" autocomplete="off" name="age"  value="<?php echo $result['age']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Gender</h3>
		    Male
            <input type="radio" required name="gender" value="Male"> &nbsp&nbsp&nbsp&nbsp
			Female
			<input type="radio" required name="gender" value="Female">&nbsp&nbsp&nbsp&nbsp
			Other
			<input type="radio" required name="gender" value="Other">
          </div>
		  
		  <div class="field-wrap">
		  <h3 class="lable">Qualification</h3>
		    MBBS
            <input type="checkbox" value="MBBS" name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			BDS
			<input type="checkbox" value="BDS" name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			BAMS
			<input type="checkbox" value="BAMS" name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			BUMS
            <input type="checkbox" value="BUMS"  name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			BHMS
			<input type="checkbox" value="BHMS"  name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			MD
			<input type="checkbox" value="MD"  name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			MS 
            <input type="checkbox" value="MS"  name="qual[]"> &nbsp&nbsp&nbsp&nbsp
			DMB
			<input type="checkbox" value="BMS" name="qual[]">
			
          </div>
		  
		  <div class="field-wrap">
		  <h3>Category :</h3>
			<select name ="category" required>
			<option value ="Physician">Physician</option>
			<option value ="Dermatologists">Dermatologists</option>
			<option value ="Endocrinologists">Endocrinologists</option>
			<option value ="Neurologists">Neurologists</option>
			<option value ="Nephrologists">Nephrologists</option>
			<option value ="Oncolgists">Oncolgists</option>
			<option value ="Cardiologists">Cardiologists</option>
			<option value ="Allergists/immunologists">Allergists/immunologists</option>
			</select>
			</div>
		  
		  <div class="field-wrap">
		  <h3 class="lable">Address</h3>
            <input class="wid" type="text" required placeholder="Enter Your Address" autocomplete="off" name="address"  value="<?php echo $result['address']; ?>"/>
          </div>
		  
		  <div class="field-wrap">
		  
		  <h3 class="lable">State</h3>
		  <select name ="state" required>
			<option value ="Andhra Pradesh">Andhra Pradesh</option>
			<option value ="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value ="Assam">Assam</option>
			<option value ="Bihar">Bihar</option>
			<option value ="Chhattisgarh">Chhattisgarh</option>
			<option value ="Goa">Goa</option>
			<option value ="Gujrat">Gujrat</option>
			<option value ="Haryana">Haryana</option>
			<option value ="Himachal Pradesh">Himachal Pradesh</option>
			<option value ="Jammu & Kashmir">Jammu & Kashmir</option>
			<option value ="Jharkhand">Jharkhand</option>
			<option value ="Karnataka">Karnataka</option>
			<option value ="Kerala">Kerala</option>
			<option value ="Madhya Pradesh">Madhya Pradesh</option>
			<option value ="Mharashtra">Mharashtra</option>
			<option value ="Manipur">Manipur</option>
			<option value ="Meghalaya">Meghalaya</option>
			<option value ="Mizoram">Mizoram</option>
			<option value ="Nagaland">Nagaland</option>
			<option value ="Odisha">Odisha</option>
			<option value ="Punjab">Punjab</option>
			<option value ="Rajasthan">Rajasthan</option>
			<option value ="Sikkim">Sikkim</option>
			<option value ="Tamil Nadu">Tamil Nadu</option>
			<option value ="Telangana">Telangana</option>
			<option value ="Tripura">Tripura</option>
			<option value ="Uttar Pradesh ">Uttar Pradesh</option>
			<option value ="Uttarakhand">Uttarakhand</option>
			<option value ="West Bengal">West Bengal</option>
		  </select>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Contact no</h3>
            <input class="wid" type="number" required placeholder="Enter Your Contact no " autocomplete="off" name="contact"  value="<?php echo $result['contact_no']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input class="wid" type="Email" required placeholder="Enter Your Email" autocomplete="off" name="email"  value="<?php echo $result['email']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Username</h3>
            <input class="wid" type="text" required placeholder="Enter Username" autocomplete="off" name="username"  value="<?php echo $result['user_id']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Password</h3>
            <input class="wid" type="text" required placeholder="Enter Your Password" autocomplete="off" name="password"  value="<?php echo $result['password']; ?>"/>
          </div>
		  
		  
		  
		  
		  
		  
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
         
          <button type="submit" class="button button-block" name="update">Update</button>
		  
		  
          
          </form>

        </div>
        
      </div>
      </div>

	
	
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