<?php require_once('dbsLoginUser.php');
 if(isset($_SESSION['user_id'])){
$user_id=$_SESSION['user_id'];
$conn = mysqli_connect('localhost', 'root', '', 'matjre');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT product_name,  qty,
                     product_price, id FROM cart where sander_user=$user_id";
            $result = $conn->query($sql);
$cartnumberitems = 0;
$cartTotal = 0;
while ($row = $result->fetch_assoc()) {
	$cartnumberitems = ++$cartnumberitems;
	$cartTotal = $cartTotal + ($row["product_price"] * $row["qty"]);
} }
else
{
	

	
		$conn = mysqli_connect('localhost', 'root', '', 'matjre');
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT product_name,  qty,
							 product_price, id FROM cart where sander_user=0";
					$result = $conn->query($sql);
		$cartnumberitems = 0;
		$cartTotal = 0;
		while ($row = $result->fetch_assoc()) {
			$cartnumberitems = ++$cartnumberitems;
			$cartTotal = $cartTotal + ($row["product_price"] * $row["qty"]);
		} }
	?>

<html lang="ar" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>LABTOP-EXPS</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
	
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
<link rel="stylesheet" href="header.css">
</head> 
<body>

<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
<a href="home.php" class="navbar-brand" style="padding-left: 0%;  "><b> LABTOP-EXPS</b></a> 


 
		
    		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div id="navbarCollapse" style=" align-items: center;
    justify-content: space-between !important;" class="collapse navbar-collapse justify-content-start ">
		<div class="navbar-nav">
			
				
        <a href="laptopcart.php" class="nav-item nav-link active"  class="pull-right" style="font-size: 25; ">Laptop</a>
		<a href="PcGaming.php" class="nav-item nav-link active" style="font-size: 25;">PC Gaming</a>
		<a href="hardwar.php" class="nav-item nav-link active" style="font-size: 25;">Hardware</a>	
        <a href="Storage.php" class="nav-item nav-link active" style="font-size: 25;">Storage</a>
		
		
		<form action="search.php" method="post">
<input type="text"  style="background-color:white; width:400; height:auto;margin-left:200; " name="search" placeholder="Search for products"><input type ="submit" value="Search" style="color: white; background-color: #29c68c;"> 

</form>
</div>
</div>
            
            	
		<?php if(isset($_SESSION['user_id'])){?>
			

					<ul class="nav navbar-nav">
                        
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#"><?php $a=$_SESSION['user_n']; echo $a;?></a>
						<div class="dropdown-menu">
						<a class='dropdown-item' role='presentation'  href="profile.php?id=<?= $_SESSION['user_id']; ?>">Profile</a>
						<a class="dropdown-item" role='presentation'  href="ChangePassword.php">Change Password</a> 
						<a class="dropdown-item" role='presentation'  href="logout.php">Logout</a> 
                        </li>
                    </ul>
	
 <?php  } else { ?>
<div class="navbar-nav ml-auto" >
			<div class="nav-item dropdown login-dropdown">
				<a href="LoginUser.php"  class="nav-item nav-link dropdown-toggle"></i> Login</a>
				
            </div>			
        </div>
	
		<div class="navbar-nav ml-auto">
			<div class="nav-item dropdown login-dropdown">
				<a   class="nav-item nav-link dropdown-toggle" href="SingUpUser.php"></i>Sign Up</a>
				
            </div>			
        </div>
	<?php } ?>
	<a href="cart.php">
<i class="fa" style="font-size:24px">&#xf07a;</i></a>
<span class='badge badge-success' id='lblCartCount'><?php echo $cartnumberitems ?> </span>
<br>
<h2 id="cart-total-price" style="font-size: x-large;">&nbsp;$<?php echo $cartTotal ?></h2></br>
        </div>
        
</div> 
</nav>
</body>
</html>


