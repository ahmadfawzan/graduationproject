<?php
session_start();

$errors = array(); 
if(isset($_POST["sign_up"])) {
    $firstname = $_POST['first_name'];
    $firstname = $_POST['last_name'];
$name = $_POST["user_name"];
$email = $_POST["email"];
$pass = $_POST["password"];
$repass = $_POST["password_confirmation"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "matjre";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
 $user_check_query = "SELECT * FROM singupuser WHERE user_name ='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  $row = mysqli_num_rows($result);
  if ($row == 1) { 
    if(empty('first_name')){
        $errors['nameem'] = "The First Name Can't be Empty";
    }
    if(empty('last_name')){
        $errors['nameemm'] = "The Last Name Can't be Empty";
    }
    if ($user['user_name'] === $name) {
      $errors["name"] = "Username Already Exists";

    }

    if ($user['email'] === $email) {
      $errors["email"] = "Email Already Exists";
    }
  }
  
  if(empty($repass)){
	  $errors["password_confirmation"] = "The password and confirm password does not match";
  }
	if($pass != $repass){
		$errors["match_pass"] = "The password and confirm password does not match";
	}
	if(empty($pass)) {
		$errors["password"] = "The password can't be empty";
	}
if(empty($errors)){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "matjre";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$pass = $pass;
	$sql = "INSERT INTO singupuser (first_name,last_name,user_name,email, password, password_confirmation) VALUES ('$firstname','$firstname','$name','$email','$pass','$repass')";

	if (mysqli_query($conn, $sql)) {
		$_SESSION['messagesingup'] = "Done!!, You Registered Successfully Now Go To Login";
	header("Location: SingUpUser.php");
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
else{
	echo '<script>alert("Email Already Exists")</script>';
}

}
?>