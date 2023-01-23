<?php session_start();?>
  <?php include 'header.php'?>


<!DOCTYPE html>

<html>
<head>

	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
	<link rel="stylesheet" href="Loginuser.css">
</head>
<body style='' >

<div class="container" >
	<div class="d-flex justify-content-center " style="height: 90%">

		<div class="card">
			<a href="home.php" class="btn float-center login_btn"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg></a> <i class="bi bi-house-door"></i>
			<div class="card-header">
			
				<h3 id="texh3">Login</h3>
				
				
			<div class="card-body">
		<form method="post">
	<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text">
	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
<i class="bi bi-envelope-fill"></i></span>
		</div>
		<input type="text" class="form-control" name="user_name" placeholder="User Name" required autocomplete="off">
		</div>


	<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
	<input type="password" class="form-control" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" placeholder="Password" id="myInput" required>
			</div>
	<div class="form-group">

	<h6 style="color:white;" > 	<input type="checkbox" onclick="myFunction()">
Show Password</h6>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>			
	<input type="submit" name="Login" value="Login" class="btn  float-right login_btn">
		</div>
	
<div class="form-group" >
<a href="" style="color:white; font-weight:600;">Forgot Password ?</a><br>
<a href="" style="color:white; font-weight:600;">Create an account !!</a>
</div>
</form>	
</div>				
</div>
</div>
</div>
</body>
</html>

