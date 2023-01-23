<?php
include "connect.php";
$id= $_GET["id"];

$res = mysqli_query($conn,"select * from admin where id=$id");

$row = mysqli_fetch_assoc($res);

if($row == false) {
	header("Location: dashboard.php");
}

if($row['id'] !== $_SESSION['admin_id']) {
	header("Location: dashboard.php");
}

if(isset($_POST['sav'])) {
	$id = (int)$_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = ($_POST['password'] == '') ?  $row['password'] : $_POST['password'];
    
	
	
	$query = "UPDATE admin SET user_admin = '" . $name . "' ,email = '" . $email . "',password = '" . $password . "'  WHERE ID = " . $_GET["id"];
	
	
	
	$stmt = mysqli_query($conn,$query);
	
	if($stmt == true) {
		$_SESSION['massage'] = "Update Successfully";
		header("Location: admin.php");
		exit();
	} else {
		$_SESSION['massage'] = "Error";
	}
}

?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
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
		  
	<form method="post" name="form1" action="" enctype="multipart/form-data">
	
			<div class="col" >	
			<?php if(isset($massage)) : ?>
	<div class="form-control" style="background:green;color:#fff;">
		<?php echo $massage; ?>
	</div>
	<?php endif; ?>						
						<label>Admin ID</label>
						<input type="text" name="id" class="form-control" placeholder="ID" style="width:600px;" value="<?= $row['id'] ?>"required autocomplete="off"><br>
						<label>Username</label>
						<input type="text" name="name" class="form-control" placeholder="Username" style="width:600px;" value="<?= $row['user_admin'] ?>"required autocomplete="off"><br>
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email" style="width:600px;" value="<?= $row['email'] ?>"required autocomplete="off"><br>
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="password" style="width:600px;" autocomplete="off"><br>
						
						<button type="submit"  name="sav" class="btn btn-success">Update</button>
			</div><br>
			</div>
	</form>
		 </div></div></div>
	</section>
	  <script src="script.js"></script>
</body>
</html>