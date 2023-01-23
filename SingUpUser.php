<?php 

session_start();
include 'header.php';

?>





<html>
<head>

	<title>Signup</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
    <link rel="stylesheet" href="Loginuser.css">
</head>
<body style='background-image:url("backgroundUser.jpg")' >
<div class="container">
	<div class="d-flex justify-content-center" style="height: 90%">
		<div class="cardsign">
		<a href="home.php" class="btn btn-success login_btn"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg></a> <i class="bi bi-house-door"></i>
		
			<div class="card-header">
						<h3>Sign Up</h3>
						<?php if (isset($_SESSION['messagesingup']) && !empty($_SESSION['messagesingup'])) { ?>
					<h3 ><?= $_SESSION['messagesingup']?></h3>
                        <?php
                        unset($_SESSION['messagesingup']);
                    }
                    ?>

			<div class="card-body">
		<form method="POST" action="databaseusersingup.php">
            <div class="input-group form-group">
	<div class="input-group-prepend">
	<span class="input-group-text">
	<i class="fas fa-user "></i></span>
	</div>	
	<input type="text" class="form-control" name="first_name"  placeholder="First Name" required autocomplete="off">	
	<?php if(isset($errors["nameem"]) && !empty($errors["nameem"])){ echo "<p>" . $errors["nameem"] . "</p>";} ?>			
	</div>
    <div class="input-group form-group">
	<div class="input-group-prepend">
	<span class="input-group-text">
	<i class="fas fa-user"></i></span>
	</div>	
	<input type="text" class="form-control" name="last_name"  placeholder="Last Name" required autocomplete="off">
	<?php if(isset($errors["nameemm"]) && !empty($errors["nameemm"])){ echo "<p>" . $errors["nameemm"] . "</p>";} ?>				
	</div>
        	
    
    	<div class="input-group form-group">
	<div class="input-group-prepend">
	<span class="input-group-text">
	<i class="fas fa-user"></i></span>
	</div>	
	<input type="text" class="form-control" name="user_name"  placeholder="Username" required autocomplete="off">
	<?php if(isset($errors["name"]) && !empty($errors["name"])){ echo "<p>" . $errors["name"] . "</p>";} ?>				
	</div>
	
	

<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text">
	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
<i class="bi bi-envelope-fill"></i></span>
		</div>
	<input type="email" class="form-control" name="email" placeholder="email@email.com"  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="Invalid email address" required autocomplete="off">
	<?php if(isset($errors["email"]) && !empty($errors["email"])){ echo "<p>" . $errors["email"] . "</p>";} ?>
		</div>
			

		

	<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
<input type="password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" id="myInput" required autocomplete="off">
	 <?php if(isset($errors["password"]) && !empty($errors["password"])){ echo "<p style='color:white; font-size:18px; text-align:center;'>" . $errors["password"] . "</p>";} ?>
			</div>
	<div class="form-group">
		</div>	
		
		<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
		<input type="password" class="form-control" placeholder="Confirm Password" id="con" name="password_confirmation"  minlength="8" required>
					</div>
					<?php if(isset($errors["match_pass"]) && !empty($errors["match_pass"])){ echo "<p>" . $errors["match_pass"] . "</p>";} ?>
		<?php if(isset($errors["repass"]) && !empty($errors["repass"])){ echo "<p>" . $errors["repass"] . "</p>";} ?>

	<div class="form-group">

	<h6 style="color:white;" > 	<input type="checkbox" onclick="myFunction12()">
Show Password</h6>
<script>
function myFunction12() {
  var z = document.getElementById("con");
  var x = document.getElementById("myInput");
  if (z.type === "password" && x.type === "password") {
    z.type = "text";
	x.type = "text";
  } else {
    z.type = "password";
	x.type = "password";
  }
}
</script></div>			
				
	<div class="form-group">
	<input type="submit" value="Signup" name="sign_up" class="btn float-right login_btn">
		</div>
		<div class="form-group" >
<a href="LoginUser.php" style="color:white; font-weight:600;">Do you have an account ?</a>
</div>

	</div>

</form>	
</div>				
</div>
</div>
</div>
</body>
</html>

