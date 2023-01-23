<?php
session_start();
	if(!isset($_SESSION['id'])){
		header("Location: loginadmin.php");
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "matjre";
	
	$conn = mysqli_connect($servername, $username, $password,$db_name);
	
	
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
$id=$_GET["id"];
$result = mysqli_query($conn,"delete from product where id=$id");
if($result == true) {
	header("Location:product.php");
}
?>