<?php
session_start();
if(!isset($_SESSION['admin_id'])){
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


?>