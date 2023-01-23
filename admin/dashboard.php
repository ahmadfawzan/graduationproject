

<?php 

include 'connect.php';
$query = 'SELECT * FROM singupuser';
$stmt = mysqli_query($conn, $query);
$users = mysqli_num_rows($stmt);

$query = 'SELECT * FROM product';
$stmt = mysqli_query($conn, $query);
$products = mysqli_num_rows($stmt);
$query = 'SELECT * FROM admin';
$stmt = mysqli_query($conn, $query);
$admin = mysqli_num_rows($stmt);



$query = 'SELECT * FROM messeges';
$stmt = mysqli_query($conn, $query);
$mess = mysqli_num_rows($stmt);

$query = 'SELECT * FROM orders';
$stmt = mysqli_query($conn, $query);
$order = mysqli_num_rows($stmt);



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>  Admin Dashboard  </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
     <?php require_once('sidebar.php') ?>

  <section class="home-section">
                   <?php require_once('nav.php'); ?>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box" style="background-color:#ddd;width:45%;">
          <div class="right-side">
            <div class="box-topic"style="font-size:25px; font-weight:bold;
			font-family:cursive;">Products</div>
            <div class="number"style=" font-weight:bold;font-family:cursive;"><?= $products ?></div>
            
          </div>
        </div>
        <div class="box" style="background-color:#ddd;width:45%;">
          <div class="right-side">
            <div class="box-topic" style="font-size:25px; font-weight:bold;
			font-family:cursive;">Orders</div>
            <div class="number"style=" font-weight:bold;font-family:cursive;"><?= $order ?></div>
            
          </div>
        </div>
        </div>
        
      <div class="overview-boxes">
        <div class="box" style="background-color:#ddd;width:45%;">
          <div class="right-side">
            <div class="box-topic"style="font-size:25px; font-weight:bold;
			font-family:cursive;">Users</div>
            <div class="number"style=" font-weight:bold;font-family:cursive;"><?= $users ?></div>
            
          </div>
        
      </div>
     
		<div class="box" style="background-color:#ddd;width:45%;">
          <div class="right-side">
            <div class="box-topic"style="font-size:25px; font-weight:bold;font-family:cursive;">Message</div>
            <div class="number"style=" font-weight:bold;font-family:cursive;"><?= $mess ?></div>
            
          </div>
        </div>
        </div>
       
      <div class="overview-boxes">
		<div class="box" 
		style="background-color:#ddd;width:45%;">
          <div class="right-side">
            <div class="box-topic" style="font-size:25px; font-weight:bold;
			font-family:cursive;">Admins</div>
            <div class="number"style=" font-weight:bold;font-family:cursive;"><?= $admin ?></div>
           
          </div>
        </div>
		
		
        </div>
        </div>
      
    
  </section>

      <script src="script.js"></script>


</body>
</html>
	
				
         




	
				
         



	