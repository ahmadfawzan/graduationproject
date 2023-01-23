
<?php

include 'dashboard.php';
$conn = mysqli_connect('localhost', 'root', '', 'matjre');
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
   

  <section class="home-section" style="background-color:white;">
             

    <div class="home-content" >
      <div class="overview-boxes">
          <div class="right-side">
		  <table class="table table-hover">
	<thead>
    <tr>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">ID</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">First Name</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">Last Name</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">User Name</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">Email</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">Password</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">Password confirmtion</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;">code</th>
      <th scope="col" style=" border: 1px solid black;background-color:#32CD32;"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  $query = "SELECT * FROM singupuser";
	$stmt2 = mysqli_query($conn,$query);
	$arr = mysqli_fetch_all($stmt2);
	foreach($arr as $ar) {
  ?>
  
        
    <tr>
      <th scope="row" style=" border: 1px solid black; background-color:white;"><?= $ar['0'] ?></th>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['1'] ?></td>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['2'] ?></td>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['3'] ?></td>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['4'] ?></td>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['5'] ?></td>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['7'] ?></td>
      <td style="border: 1px solid black; background-color:white;"><?= $ar['8'] ?></td>
	  <td style="border: 1px solid black; background-color:white;"><a href="delete_user.php?id=<?= $ar['0'] ?>" class="btn btn-danger">DELETE</a></td>
    </tr>
    <?php }?>
	
	  
  </tbody>
</table>
           </div>
        
      </div>
    </div>
  </section>

   <script >let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}</script>


</body>
</html>

