<?php
include('connection.php'); 
$del_id = $_GET['id'];

	$sql ="delete from appointment where appointment_id='$del_id'";
$query = mysqli_query($link,$sql);

if($query>0)
{
	//echo "Data deleted successfully"
	header("location:doctor_appointment.php");
}
?>