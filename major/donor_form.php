<?php 

	include('connection.php');
	if(isset($_POST['submit']))
	{
			$name=$_POST['name'];
			$age=$_POST['age'];
			$gender=$_POST['gender'];
			$blood=$_POST['blood_group'];
			$city=$_POST['city'];
			$address=$_POST['address'];
			$contact=$_POST['contact'];
			$email=$_POST['email'];
			//echo $email; die;
			$sql = "insert into donor set donor_name='$name',age='$age',gender='$gender',blood_group='$blood',city='$city',address='$address',contact_no=$contact,email='$email'";
			//echo $sql; die;
			$query=mysqli_query($link,$sql);
			if($query>0)
			{
				header('location:donor_form.php');
			}
			else
			{
				
				echo "Error";
			}
	}
?>



<!doctype html>
<html>
<head>
  <meta charset ="utf-8">
  <meta name ="viewport" content ="width=device-width, initial-scale=1">	
<title>Donor form</title>

  <link rel ="stylesheet" href ="css/bootstrap.css">
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src ="js/bootstrap.js"></script>
	<link rel ="stylesheet" href ="donorform.css">
	
	<script type="text/javascript">

  function checkForm(form)
  {
      if(form.contact.value.length < 8 || form.contact.value.length > 11) {
        alert("Error: Enter a valid Number");
        form.contact.focus();
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
						<li class ="active"><a href ="#">Be A Donor</a></li>
						<li><a href ="about.html">About us</a></li>
					</ul>
				</div>
			</div>
		</nav>

	</header>
	      <div class="container transparentform">
		  <div class="form">
			<center><h2>Blood Donor Form</h2></center>
        <div id="login">   
       
          
          <form action="" method="post" onsubmit="return checkForm(this);">
          
           <div class="field-wrap">
			<h3 class="lable">Name</h3>
            <input class="wid" type="text"  placeholder="Enter Your Name" autocomplete="off" required name="name"/>
           </div>
          
          <div class="field-wrap">
		  <h3 class="lable">Age</h3>
            <input class="wid" type="number" max="60" min="18"  placeholder="Enter Your Age" autocomplete="off" required name="age"/>
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

			<input  type ="radio" name ="blood_group" value ="A+">A+&nbsp&nbsp		
			<input  type ="radio" name ="blood_group" value ="B+">B+&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="AB+">AB+&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="O+">O+&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="A-">A-&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="B-">B-&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="AB-">AB-&nbsp&nbsp
			<input  type ="radio" name ="blood_group" value ="O-">O-&nbsp&nbsp
         </div>
		 <div class="field-wrap">
		 <h3 class="lable">City :</h3>
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
			<h3 class="lable">Address</h3>
			<input class="wid" type="text" maxlength="9" placeholder="Enter Your Address" autocomplete="off" required name="address"/> 
		 </div>
		 <div class="field-wrap">
			<h3 class="lable">Contact No</h3>
			<input class="wid" type="number" maxlength="9" placeholder="Enter Your Contact No" autocomplete="off" required name="contact"/> 
		 </div>
		 <div class="field-wrap">
		  <h3 class="lable">Email</h3>
            <input class="wid" type="email"  placeholder="Enter Your Email" autocomplete="off" required name="email"/>
          </div>
          <button type="submit" class="button button-block" name="submit">SUBMIT</button>
		  
		  
          
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