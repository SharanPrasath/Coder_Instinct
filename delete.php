<?php

$conn = mysqli_connect("localhost","root","","hospital");

if(!$conn)
{
	 die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM patientinfo where p_id='$id'");
if($del)
{
	mysqli_close($conn);
	header("location:database.php");
	exit;
}

else
{
	echo "Error deleting record";
}
?>