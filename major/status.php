<?php
include('connection.php'); 
$id = $_GET['id'];

	$sql ="update appointment set status=1 where appointment_id='$id'";
$query = mysqli_query($link,$sql);

if($query>0)
{
	//echo "Data deleted successfully"
	header("location:doctor_appointment.php");
}
?>