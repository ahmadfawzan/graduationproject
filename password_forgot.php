<?php
	session_start();
?>
<?php include 'header.php'?>
<html>
<head>
<link rel="stylesheet" href="Loginuser.css">
	<title>Send Email</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
</head>
<body style='background-image:url("backgroundUser.jpg")'>
<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
	<br>
				<h3>Enter Email Associated With Account </h3><br>
			<div class="card-body">
		<form action="reset.php" method="POST">
	<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text">
	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
<i class="bi bi-envelope-fill"></i></span>
		</div>
	<input type="email" name="email" class="form-control" placeholder="email@email.com" required>
		</div>
				
	<input type="submit" value="Send" name="reset" class="btn float-right login_btn">
		</div>
	<br>
<div class="form-group" >
<a href="LoginUser.php" style="color:white; font-weight:600;">I Rememberd My Password</a><br>

</div>
</form>	
</div>				
</div>
</div>
</div>
</body>
</html>
