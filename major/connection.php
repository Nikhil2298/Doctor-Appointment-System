<?php 
	$link= mysqli_connect("localhost","root","","patient_doctor _database");
	if(!$link)
	{
		echo "Not connected";
	}
?>