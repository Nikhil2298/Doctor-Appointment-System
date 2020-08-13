<?php 
    include('connection.php');
	session_start();
	$id=$_SESSION['id'];
	$sql="select * from patient_detail where patient_id='$id'";
	$query=mysqli_query($link,$sql);
	$result=mysqli_fetch_array($query);
	if(isset($_POST['update']))
			{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$blood=$_POST['blood_group'];
		$address=$_POST['address'];
		$state=$_POST['state'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sqlupdate = "update patient_detail set patient_name='$name', age='$age', gender='$gender',blood_group='$blood', city='$state', address='$address', contact_no='$contact', email='$email', user_id='$username', password='$password' where patient_id='$id'";
		//echo $sql; die;
		$update=mysqli_query($link,$sqlupdate);
		if($update>0)
		{
			header('location:patient_detail.php');
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
<title>Patient signup Page</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel ="stylesheet" href ="signup.css">
	
	<script type="text/javascript">

  function checkForm(form)
  {
	  if(form.contact.value.length < 8 || form.contact.value.length > 11) {
        alert("Error: Enter a valid Number");
        form.contact.focus();
        return false;
      }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.Cpassword.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }

    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    return true;
  }

</script>

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
					<li class ="active"><a href ="#">My Detail</a></li>
					<li><a href ="find_doctor.php">Book Appointment</a></li>
					<li><a href ="viewAppointment.php">View Appointment</a></li>
					<li><a href ="cancel_appointment.php">Cancel Appointment</a></li>
					<li><a href ="history.php">History</a></li>
					<li><a href ="logout_patient.php">Log Out</a></li>

				</ul>
			</div>			
		</div>
	</nav>

	</header>
	<div class="container transparentform">
		  <div class="form">
   
        <div id="login">
			<center><h2>Edit Your Detail</h2></center>
          <form action="" method="post">
		  
          
           <div class="field-wrap">
			<h3 class="lable">Patient Name</h3>
            <input class="wid" type="text" required placeholder="Enter Your name" autocomplete="off" name="name" value="<?php echo $result['patient_name']; ?>"/>
           </div>
		   
		    
          
          
         <div class="field-wrap">
		  <h3 class="lable">Age</h3>
            <input class="wid" type="number" max="85" min="2" required placeholder="Enter Your Age" autocomplete="off" name="age" value="<?php echo $result['age']; ?>"/>
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
         <h3 class="lable">Blood Group :</h3>
			<input  type ="radio" name ="blood_group" value ="A+" required>A+&nbsp&nbsp		
			<input  type ="radio" name ="blood_group" value ="B+" required>B+&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="AB+" required>AB+&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="O+" required>O+&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="A-" required>A-&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="B-" required>B-&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="AB-" required>AB-&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="O-" required>O-&nbsp&nbsp
         </div>
		 
		  
		  
		  
		  <div class="field-wrap">
		  <h3 class="lable">Address</h3>
            <input class="wid" type="text" required placeholder="Enter Your Address" autocomplete="off" name="address" value="<?php echo $result['address']; ?>"/>
          </div>
		  
		  <div class="field-wrap">
		  
		  <h3 class="lable">State</h3>
		  <select name ="state" required value="<?php echo $result['city']; ?>">
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
            <input class="wid" type="number" required placeholder="Enter Your Contact no " autocomplete="off" name="contact" value="<?php echo $result['contact_no']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input class="wid" type="Email" required placeholder="Enter Your Email" autocomplete="off" name="email" value="<?php echo $result['email']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Username</h3>
            <input class="wid" type="text" required placeholder="Enter Username" autocomplete="off" name="username" value="<?php echo $result['user_id']; ?>"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Password</h3>
	<input class="wid" type="text" required placeholder="Enter Your Password" autocomplete="off" name="password" value="<?php echo $result['password']; ?>"/>
          </div>
		  
		
          <p class="forgot"><a href="patient_detail.php">BACK</a></p>
         
          <button type="submit" class="button button-block" name="update">Update</button>
		  
		  
          
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