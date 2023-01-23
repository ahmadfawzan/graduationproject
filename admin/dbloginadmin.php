
<?php

if(!isset($_SESSION)) { 
	session_start(); 
  }

if(isset($_SESSION['id'])){
	header("Location: dashboard.php");
}

if(isset($_POST['login'])){
	
	$user = $_POST['user_admin'];
	$pass = $_POST['password'];
	
	
	
	$con = mysqli_connect('localhost','root','','matjre');

	if(mysqli_connect_errno()){
		echo 'eroor';

	}else{
		
        $query 		= mysqli_query($con, "SELECT * from admin where user_admin = '$user' and password = '$pass'");
        $row		= mysqli_fetch_array($query);
        $num_row 	= mysqli_num_rows($query);
               if($num_row > 0){
			
			
			$_SESSION['admin_id'] = $row['id'];
			$_SESSION['admin_name'] = $row['user_admin'];
			header("Location:dashboard.php");
			
		} else {
			
			echo 'Email or Password not Correct';
		}
	}
}

	?>
 
