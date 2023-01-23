<?php
session_start();
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "matjre";

$conn = mysqli_connect($servername, $username, $password,$db_name);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $id= $_GET["id"];
$res=mysqli_query($conn,"SELECT * from singupuser where id=$id ");
$row = mysqli_fetch_assoc($res);

$path='profile.php?id='. $_GET["id"]; ;

if(isset($_POST['save'])) {
	$id = (int)$_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
    

$query = " UPDATE singupuser SET   first_name = '" . $first_name . "' ,last_name= '" . $last_name . "' ,user_name = '" . $user_name . "' , email = '" . $email . "',phone = '" . $phone . "' WHERE ID = " . $_GET["id"];
$stmt = mysqli_query($conn,$query);
	if($stmt == true) {
		
		
		$_SESSION['success_message'] = "Update Successfully.";
		
		header('location: '.$path);
		
		exit();
	} else {
		$_SESSION['massage'] = "Error";
	}
	
}}

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
						<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
							<h3 style="color:white;"><?php echo $_SESSION['success_message']; ?></h3>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
			<div class="card-body">
		<form method="POST">

	<div class="input-group form-group">
	<div class="input-group-prepend">
	<span class="input-group-text">
	<i class="fas fa-user"></i></span>
    <input type="hidden" class="form-control" name="id"  placeholder="ID"  value="<?= $row['id'] ?>" required autocomplete="off">	
	</div>
    
	
	<input type="text" class="form-control" name="first_name"  placeholder="First Name"  value="<?= $row['first_name'] ?>" required autocomplete="off">			
    <input type="text" class="form-control" name="last_name"  placeholder="Last Name"  value="<?= $row['last_name'] ?>" required autocomplete="off">	
	<input type="hidden" class="form-control" name="user_name"  placeholder="user_name"  value="<?= $row['user_name'] ?>" required autocomplete="off">	
	</div>
    

<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text">
	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
<i class="bi bi-envelope-fill"></i></span>
		</div>
	<input type="email" class="form-control" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="Invalid email address" placeholder="email@email.com"  value="<?= $row['email'] ?>"required autocomplete="off">
		</div>

		

	
    

			<div class="input-group form-group">
		<div class="input-group-prepend">
	<span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg><i class="bi bi-telephone-fill"></i></span>
		</div>
<input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $row['phone'] ?>" pattern="((79)|(78)|(77)){1}[0-9]{7}"; title="Please enter a Jordanian phone number"; autocomplete="off">
			</div>
				<div class="form-group">


</script>			

<button type="submit"  name="save" class="btn btn-success">Update</button>

		</div>	
						
</body>
</html>