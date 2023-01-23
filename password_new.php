<<?php
session_start();
	if(!isset($_GET['code']) OR !isset($_GET['user'])){
		header('location: home.php');
	    exit(); 
	}

	$path = 'password_reset.php?code='.$_GET['code'].'&user='.$_GET['user'];

	if(isset($_POST['reset'])){
		$password = $_POST['password'];
		$repassword = $_POST['password_confirmation'];

		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: '.$path);
			
		}
		else{
			
			$id = (int)$_GET['user'];
			$code = $_GET['code'];
			$con = mysqli_connect('localhost','root','','matjre');
			$qu = "SELECT * FROM singupuser WHERE code = 'email' AND ID=$id";
			$query = mysqli_query($con, $qu);
			$stmt = mysqli_num_rows(mysqli_query($con, $qu));
			
			if($stmt > 0){
				
				try{
					
					
					$stmt = mysqli_query($con,"UPDATE singupuser SET password='$password' , password_confirmation='$repassword' WHERE id=" . $id);

					$_SESSION['succes'] = 'Password successfully reset';
					header('location:LoginUser.php');
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