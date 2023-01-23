<?php
session_start();
include 'header.php';
  if(!isset($_GET['code']) OR !isset($_GET['user'])){
    header('location: home.php');
    exit(); 
  }
?>
<html>
<head>
<link rel="stylesheet" href="Loginuser.css">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
</head>
<body style='background-image:url("backgroundUser.jpg")'>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
	
				<h3 id="ss" >Enter New Password</h3>
					<br>	
			<div class="card-body">
		<form action="password_new.php?code=<?php echo $_GET['code']; ?>&user=<?php echo $_GET['user']; ?>" method="POST">
	<div class="input-group form-group">
	<div class="input-group-prepend">
	<span class="input-group-text">
	<i class="fas fa-key"></i></span>
	</div>

	<input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" name="password" placeholder="New Password" id="myInput" required>				
</div>

	<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
	<input type="password" name="password_confirmation" id="con" class="form-control" placeholder="Confirm Password" id="myInput" required>
			</div>
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
</script>
		
	<input type="submit" value="Reset" name="reset" class="btn float-right login_btn">
		</div>
	
</form>	
 	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>
</div>				
</div>
</div>
</div>
</body>
</html>