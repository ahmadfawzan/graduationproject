<?php
include "connect.php";

if(isset($_POST['add'])){
$error = [];
$id = $_POST['ID'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confPassword = $_POST['confirm-password'];


 if($password !== $confPassword){
	$error['password'] = "password and confirm password doesn't match";
}

if(empty($error)){
	$password = $password;
	
	$query = "INSERT INTO admin (id,user_admin,email,password) VALUES ('$id', '$name','$email','$password')";
	$stmt = mysqli_query($conn, $query);
	if($stmt == true){
		$_SESSION['massage'] = "Admin Added Successfully";
	}else{
		$_SESSION['massage'] = "Error";

	}
}

}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
    <?php require_once('sidebar.php') ?>

  <section class="home-section">
                 <?php require_once('nav.php'); ?>


    <div class="home-content">
      <div class="overview-boxes">
          <div class="right-side">
	<form method="post" name="form1" action="">
	
			<div class="col">
			<?php if(isset($_SESSION['massage'])) : ?>
		<div class="form-control" style="background:green;color:#fff;width:280px;">
				<?php echo $_SESSION['massage']; unset($_SESSION['massage']);?>
		</div>
		<?php endif; ?>
						
			<button type="submit" name="add" class="btn btn-success"><i class="bx bx-plus-circle"></i> Add New Admin</button><br><br>
			<label>Admin ID  <label title="Mandatory Field">*</label></label>
			<input type="text" name="ID" class="form-control" placeholder="ID" style="width:487px;"required autocomplete="off">
			<p><?= isset($error['ID']) ? $error['ID'] : ''; ?></p>
		    <label>Username  <label title="Mandatory Field">*</label></label>
			<input type="text" name="name" class="form-control" placeholder="Username" style="width:487px;"required autocomplete="off">
		    <p><?= isset($error['name']) ? $error['name'] : ''; ?></p>
			<label>Email  <label title="Mandatory Field">*</label></label>
			<input type="email" name="email" class="form-control" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="Invalid email address" style="width:487px;"required autocomplete="off">
			<p><?= isset($error['email']) ? $error['email'] : ''; ?></p>	
			<label>Password  <label title="Mandatory Field">*</label></label>
			<input type="password" name="password" id="myInput" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Must contain at least one number and one uppercase and lowercase letter,and at least 8 or more characters" placeholder="password" style="width:487px;"required autocomplete="off">
			<p><?= isset($error['password']) ? $error['password'] : ''; ?></p>
			<label>Confirm-Password  <label title="Mandatory Field">*</label></label>
		    <input type="password" name="confirm-password" id="con" class="form-control" placeholder="Confirm password" style="width:100%;"required autocomplete="off"><br>
            <h6><input type="checkbox" onclick="myFunction12()"> Show Password</h6>
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
			
			
			
			</div>
	</form>
	
		  <table class="table table-hover">
	<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col" style="text-align:center;">Username</th>
      <th scope="col" style="text-align:center;">Email</th>
	  
    </tr>
  </thead>
  <tbody>
  
   <?php
  $query = "SELECT * FROM admin";
	$stmt2 = mysqli_query($conn,$query);
	$arr = mysqli_fetch_all($stmt2);
	foreach($arr as $ar) {
  ?>
  
    <tr>
      <th scope="row"style="text-align:center;"><?= $ar['0'] ?></th>
      <td style="text-align:center;"><?= $ar['1'] ?> </td>
      <td><?= $ar['2'] ?></td>
	 
    </tr>
    <?php }?>
	  
  </tbody>
</table>
           </div>
      </div>
    </div>
  </section>
    <script src="script.js"></script>
</body>
</html>