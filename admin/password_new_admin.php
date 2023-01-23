<?php
session_start();
	if(!isset($_GET['code']) OR !isset($_GET['user'])){
		header('location: dashboard.php');
	    exit(); 
	}

	$path = 'password_reset_admin.php?code='.$_GET['code'].'&user='.$_GET['user'];

	if(isset($_POST['reset'])){
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: '.$path);
			
		}
		else{
			
			$id = (int)$_GET['user'];
			$code = $_GET['code'];
			$con = mysqli_connect('localhost','root','','matjre');
			$qu = "SELECT * FROM admin WHERE ID=$id";
			$query = mysqli_query($con, $qu);
			$stmt = mysqli_num_rows(mysqli_query($con, $qu));
			
			if($stmt > 0){
				
				try{
					
					
					$stmt = mysqli_query($con,"UPDATE admin SET password='$password' WHERE id=" . $id);

					$_SESSION['successs'] = 'Password successfully reset';
					header('location:loginadmin.php');
				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: '.$path);
				}
			}
			else{
				$_SESSION['error'] = 'Code did not match with user';
				header('location: '.$path);
			}
			mysqli_close($con);
		}

	}
	else{
		$_SESSION['error'] = 'Input new password first';
		header('location: '.$path);
	}

?>