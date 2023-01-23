<?php
$conn = mysqli_connect('localhost', 'root', '', 'matjre');
$id=$_GET["id"];
$result = mysqli_query($conn,"delete from singupuser where id=$id");
if($result == true) {
	header("Location:user.php");
}
?>