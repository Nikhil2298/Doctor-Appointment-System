<?php 
    include('connection.php');
	if(isset($_POST['signup']))
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
		$city=$_POST['city'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "insert into doctor_detail set doctor_name='$name', age='$age', gender='$gender', qualification='$chk', category='$category', city='$city', address='$address', contact_no='$contact', email='$email', user_id='$username', password='$password'";
		//echo $sql; die;
		$query=mysqli_query($link,$sql);
		if($query>0)
		{
			header('location:doctor_login.php');
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
<title>Doctor signup Page</title>

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

    return true;
  }

</script>

	
	
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

	<div class="container transparentform">
		  <div class="form">
   
        <div id="login">
			<center><h2>Doctor Signup</h2></center>
          <form action="" method="post" onsubmit="return checkForm(this);">
		  
          
           <div class="field-wrap">
			<h3 class="lable">Doctor Name</h3>
            <input class="wid" type="text" required placeholder="Enter Your Name" autocomplete="off" name="name"/>
           </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Age</h3>
            <input class="wid" type="number" max="85" min="23" required placeholder="Enter Your Age" autocomplete="off" name="age"/>
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
            <input class="wid" type="text" required placeholder="Enter Your Address" autocomplete="off" name="address"/>
          </div>
		  
		  <div class="field-wrap">
		  
		  <h3 class="lable">City</h3>
		  <select name="city" required >
<option selected="selected">-Select-</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Metropolitan Cities-</i></font></option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Bengaluru/Bangalore">Bengaluru/Bangalore</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chennai">Chennai</option>
<option value="Delhi">Delhi</option>
<option value="Gurgaon">Gurgaon</option>
<option value="Kolkatta">Kolkatta</option>
<option value="Mumbai">Mumbai</option>
<option value="Noida">Noida</option>
<option value="Pune">Pune</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
<option value="Anantapur">Anantapur</option>
<option value="Guntakal">Guntakal</option>
<option value="Guntur">Guntur</option>
<option value="Hyderabad/Secunderabad">Hyderabad/Secunderabad</option>
<option value="kakinada">kakinada</option>
<option value="kurnool">kurnool</option>
<option value="Nellore">Nellore</option>
<option value="Nizamabad">Nizamabad</option>
<option value="Rajahmundry">Rajahmundry</option>
<option value="Tirupati">Tirupati</option>
<option value="Vijayawada">Vijayawada</option>
<option value="Visakhapatnam">Visakhapatnam</option>
<option value="Warangal">Warangal</option>
<option value="Andra Pradesh-Other">Andra Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
<option value="Itanagar">Itanagar</option>
<option value="Arunachal Pradesh-Other">Arunachal Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
<option value="Guwahati">Guwahati</option>
<option value="Silchar">Silchar</option>
<option value="Assam-Other">Assam-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Patna">Patna</option>
<option value="Bihar-Other">Bihar-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
<option value="Bhillai">Bhillai</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Raipur">Raipur</option>
<option value="Chhattisgarh-Other">Chhattisgarh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
<option value="Panjim/Panaji">Panjim/Panaji</option>
<option value="Vasco Da Gama">Vasco Da Gama</option>
<option value="Goa-Other">Goa-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Anand">Anand</option>
<option value="Ankleshwar">Ankleshwar</option>
<option value="Bharuch">Bharuch</option>
<option value="Bhavnagar">Bhavnagar</option>
<option value="Bhuj">Bhuj</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Gir">Gir</option>
<option value="Jamnagar">Jamnagar</option>
<option value="Kandla">Kandla</option>
<option value="Porbandar">Porbandar</option>
<option value="Rajkot">Rajkot</option>
<option value="Surat">Surat</option>
<option value="Vadodara/Baroda">Vadodara/Baroda</option>
<option value="Valsad">Valsad</option>
<option value="Vapi">Vapi</option>
<option value="Gujarat-Other">Gujarat-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
<option value="Ambala">Ambala</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Faridabad">Faridabad</option>
<option value="Gurgaon">Gurgaon</option>
<option value="Hisar">Hisar</option>
<option value="Karnal">Karnal</option>
<option value="Kurukshetra">Kurukshetra</option>
<option value="Panipat">Panipat</option>
<option value="Rohtak">Rohtak</option>
<option value="Haryana-Other">Haryana-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
<option value="Dalhousie">Dalhousie</option>
<option value="Dharmasala">Dharmasala</option>
<option value="Kulu/Manali">Kulu/Manali</option>
<option value="Shimla">Shimla</option>
<option value="Himachal Pradesh-Other">Himachal Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
<option value="Jammu">Jammu</option>
<option value="Srinagar">Srinagar</option>
<option value="Jammu and Kashmir-Other">Jammu and Kashmir-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
<option value="Bokaro">Bokaro</option>
<option value="Dhanbad">Dhanbad</option>
<option value="Jamshedpur">Jamshedpur</option>
<option value="Ranchi">Ranchi</option>
<option value="Jharkhand-Other">Jharkhand-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
<option value="Bengaluru/Bangalore">Bengaluru/Bangalore</option>
<option value="Belgaum">Belgaum</option>
<option value="Bellary">Bellary</option>
<option value="Bidar">Bidar</option>
<option value="Dharwad">Dharwad</option>
<option value="Gulbarga">Gulbarga</option>
<option value="Hubli">Hubli</option>
<option value="Kolar">Kolar</option>
<option value="Mangalore">Mangalore</option>
<option value="Mysoru/Mysore">Mysoru/Mysore</option>
<option value="Karnataka-Other">Karnataka-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
<option value="Calicut">Calicut</option>
<option value="Cochin">Cochin</option>
<option value="Ernakulam">Ernakulam</option>
<option value="Kannur">Kannur</option>
<option value="Kochi">Kochi</option>
<option value="Kollam">Kollam</option>
<option value="Kottayam">Kottayam</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Palakkad">Palakkad</option>
<option value="Palghat">Palghat</option>
<option value="Thrissur">Thrissur</option>
<option value="Trivandrum">Trivandrum</option>
<option value="Kerela-Other">Kerela-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
<option value="Bhopal">Bhopal</option>
<option value="Gwalior">Gwalior</option>
<option value="Indore">Indore</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Ujjain">Ujjain</option>
<option value="Madhya Pradesh-Other">Madhya Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
<option value="Ahmednagar">Ahmednagar</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Jalgaon">Jalgaon</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Mumbai">Mumbai</option>
<option value="Mumbai Suburbs">Mumbai Suburbs</option>
<option value="Nagpur">Nagpur</option>
<option value="Nasik">Nasik</option>
<option value="Navi Mumbai">Navi Mumbai</option>
<option value="Pune">Pune</option>
<option value="Solapur">Solapur</option>
<option value="Maharashtra-Other">Maharashtra-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
<option value="Imphal">Imphal</option>
<option value="Manipur-Other">Manipur-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
<option value="Shillong">Shillong</option>
<option value="Meghalaya-Other">Meghalaya-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
<option value="Aizawal">Aizawal</option>
<option value="Mizoram-Other">Mizoram-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
<option value="Dimapur">Dimapur</option>
<option value="Nagaland-Other">Nagaland-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
<option value="Bhubaneshwar">Bhubaneshwar</option>
<option value="Cuttak">Cuttak</option>
<option value="Paradeep">Paradeep</option>
<option value="Puri">Puri</option>
<option value="Rourkela">Rourkela</option>
<option value="Orissa-Other">Orissa-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
<option value="Amritsar">Amritsar</option>
<option value="Bathinda">Bathinda</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Jalandhar">Jalandhar</option>
<option value="Ludhiana">Ludhiana</option>
<option value="Mohali">Mohali</option>
<option value="Pathankot">Pathankot</option>
<option value="Patiala">Patiala</option>
<option value="Punjab-Other">Punjab-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
<option value="Ajmer">Ajmer</option>
<option value="Jaipur">Jaipur</option>
<option value="Jaisalmer">Jaisalmer</option>
<option value="Jodhpur">Jodhpur</option>
<option value="Kota">Kota</option>
<option value="Udaipur">Udaipur</option>
<option value="Rajasthan-Other">Rajasthan-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
<option value="Gangtok">Gangtok</option>
<option value="Sikkim-Other">Sikkim-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
<option value="Chennai">Chennai</option>
<option value="Coimbatore">Coimbatore</option>
<option value="Cuddalore">Cuddalore</option>
<option value="Erode">Erode</option>
<option value="Hosur">Hosur</option>
<option value="Madurai">Madurai</option>
<option value="Nagerkoil">Nagerkoil</option>
<option value="Ooty">Ooty</option>
<option value="Salem">Salem</option>
<option value="Thanjavur">Thanjavur</option>
<option value="Tirunalveli">Tirunalveli</option>
<option value="Trichy">Trichy</option>
<option value="Tuticorin">Tuticorin</option>
<option value="Vellore">Vellore</option>
<option value="Tamil Nadu-Other">Tamil Nadu-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
<option value="Agartala">Agartala</option>
<option value="Tripura-Other">Tripura-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadra & Nagar Haveli-Silvassa">Dadra & Nagar Haveli-Silvassa</option>
<option value="Daman & Diu">Daman & Diu</option>
<option value="Delhi">Delhi</option>
<option value="Pondichery">Pondichery</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
<option value="Agra">Agra</option>
<option value="Aligarh">Aligarh</option>
<option value="Allahabad">Allahabad</option>
<option value="Bareilly">Bareilly</option>
<option value="Faizabad">Faizabad</option>
<option value="Ghaziabad">Ghaziabad</option>
<option value="Gorakhpur">Gorakhpur</option>
<option value="Kanpur">Kanpur</option>
<option value="Lucknow">Lucknow</option>
<option value="Mathura">Mathura</option>
<option value="Meerut">Meerut</option>
<option value="Moradabad">Moradabad</option>
<option value="Noida">Noida</option>
<option value="Varanasi/Banaras">Varanasi/Banaras</option>
<option value="Uttar Pradesh-Other">Uttar Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
<option value="Dehradun">Dehradun</option>
<option value="Roorkee">Roorkee</option>
<option value="Uttaranchal-Other">Uttaranchal-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
<option value="Asansol">Asansol</option>
<option value="Durgapur">Durgapur</option>
<option value="Haldia">Haldia</option>
<option value="Kharagpur">Kharagpur</option>
<option value="Kolkatta">Kolkatta</option>
<option value="Siliguri">Siliguri</option>
<option value="West Bengal - Other">West Bengal - Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Other-</i></font></option>
<option value="Other">Other</option>
</select>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Contact no</h3>
            <input class="wid" type="number" required placeholder="Enter Your Contact no " autocomplete="off" name="contact"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input class="wid" type="Email" required placeholder="Enter Your Email" autocomplete="off" name="email"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Username</h3>
            <input class="wid" type="text" required placeholder="Enter Username" autocomplete="off" name="username"/>
          </div>
		  <div class="field-wrap">
		  <h3 class="lable">Password</h3>
            <input class="wid" type="Password" required placeholder="Enter Your Password" autocomplete="off" name="password"/>
          </div>
		  
		  
		  
		  
		  
		  
          
        
         
          <button type="submit" class="button button-block" name="signup">Sign Up</button>
		  
		  
          
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