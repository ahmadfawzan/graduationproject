<?php
session_start();
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$email = $_POST['emailc'];
	$massage = $_POST['message'];
	
	
	$server="localhost";
	$usnm="root";
	$psw="";
	$DB_NM="matjre";
	

	$conn = new mysqli($server, $usnm, $psw, $DB_NM);
	if ($conn->connect_error) {
		die("Not Connected :(  " . $conn->connect_error);
	}
	
	$query = "INSERT INTO messeges(id,email,message  ) VALUES('$id', '$email','$massage' )";
	$result = mysqli_query($conn, $query);
	
	if($result == true) {
		header('Location:home.php');
	}
}
?>