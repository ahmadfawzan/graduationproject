
<?php require_once('dbloginadmin.php');?>

<html>
<head>

	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
	<link rel="stylesheet" href="Loginad.css">
</head>
<body style='background-image:url("backgroundUser.jpg")' >
<form method="post" action="dbloginadmin.php">
<div class="container">
	<div class="d-flex justify-content-center h-100">

		<div class="card">
			
			<div class="card-header">
	
				<h3 id="texh3">Login Admin</h3>
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
		<input type="user" class="form-control" name="user_admin" placeholder="user_admin" required autocomplete="off">
		</div>


	<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
	<input type="password" class="form-control" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" placeholder="Password" id="myInput" required>
			</div>			<?php if(isset($errors["user_admin"]) && !empty($errors["user_admin"])){ echo "<p>" . $errors["user_admin"] . "</p>";} ?>

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
	<input type="submit" name="login" value="Login" class="btn float-right login_btn">
		</div>
	
<div class="form-group" >
<a href="password_forgot_admin.php" style="color:white; font-weight:600;">Forgot Password ?</a><br>

</div>
</form>	
</div>				
</div>
</div>
</div>
</body>
</html>