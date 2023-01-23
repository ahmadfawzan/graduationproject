<?php
session_start();
include 'header.php';
$con = mysqli_connect('localhost', 'root', '', 'matjre');
if(isset($_POST['save']))
{
 $oldpass=$_POST['opwd'];
 $user_id=$_SESSION['user_id'];
 $newpassword=$_POST['npwd'];
 $newpassword1=$_POST['cpwd'];
$sql=mysqli_query($con,"SELECT password FROM singupuser where password='$oldpass' && password_confirmation='$oldpass'  && id=' $user_id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
	if($newpassword == $newpassword1){
 $con=mysqli_query($con,"UPDATE singupuser SET password = '" . $newpassword . "' ,password_confirmation = '" . $newpassword1 . "' where id='$user_id'");
 
$_SESSION['msg1']="Password Changed Successfully !!";
	}
	else{
		$_SESSION['msg1']="Password does not match !! ";
	}
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>




<html>
  <head>
   <link rel="stylesheet" href="Loginuser.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	

   </head>
<body style='background-image:url("backgroundUser.jpg")'>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="cardsign">
		<a href="home.php" class="btn float-center login_btn"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg></a> <i class="bi bi-house-door"></i>
		
			<div class="card-header">
						<h3><?= $_SESSION['user_n'] ?></h3>
						<?php if (isset($_SESSION['msg1']) && !empty($_SESSION['msg1'])) { ?>
							<h3 style="color:white;"><?php echo $_SESSION['msg1']; ?></h3>
                        <?php
                        unset($_SESSION['msg1']);
                    }
                    ?>
			<div class="card-body">
		<form method="POST">

	
    <div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
	<input type="password" class="form-control" name="opwd"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" placeholder="Old Password" id="myout"  required></div>

    <div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
	<input type="password" class="form-control" name="npwd"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" placeholder="New Passowrd" id="con" required></div>

    <div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
	<input type="password" class="form-control" name="cpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter,
	and at least 8 or more characters" placeholder="Confirm Password" id="myInput" required></div>



			
				<div class="form-group">

	<h6 style="color:balck;" ><input type="checkbox" onclick="myFunction()">
Show Password</h6>


<script type="text/javascript">

function myFunction() {
  var a = document.getElementById("myout");
  var z = document.getElementById("con");
  var x = document.getElementById("myInput");
  
  if (a.type === "password" && z.type === "password" && x.type === "password") {
    a.type = "text";
    z.type = "text";
	x.type = "text";
  } else {
    a.type = "password";
    z.type = "password";
	x.type = "password";
  }
}
</script>		



<button type="submit"  name="save" class="btn btn-success">Update</button>

		</div>	
						
</body>
</html>