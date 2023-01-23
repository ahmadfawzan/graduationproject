<?php
include "connect.php";

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
		  <table class="table table-hover">
	<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col" style="text-align:center;">Name</th>
      <th scope="col" style="text-align:center;">Email</th>
      <th scope="col" style="text-align:center;">Phone</th>
      <th scope="col" style="text-align:center;">Address</th>
      <th scope="col" style="text-align:center;">Products</th>
      <th scope="col" style="text-align:center;">amount_paid</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $query = "SELECT * FROM orders";
	$stmt2 = mysqli_query($conn,$query);
	$arr = mysqli_fetch_all($stmt2);
	foreach($arr as $ar) {
  ?>
  
        
    <tr>
      <th scope="row"style="text-align:center;"><?= $ar['0'] ?></th>
      <td><?= $ar['1'] ?></td>
      <td><?= $ar['2'] ?></td>
      <td><?= $ar['3'] ?></td>
      <td><?= $ar['4'] ?></td>
      <td><?= $ar['6'] ?></td>
      <td><?= $ar['7']+10 ?><b>$</b></td>
	  <td>
    <a href="delete_order.php?id=<?= $ar['0'] ?>" name="cancel"  class="btn btn-danger" onclick="return confirm('Are You Sure to Delete The Order ?');"><i class="far fa-times-circle"></i>&nbsp;DELETE</a></td>
     
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