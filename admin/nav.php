<?php

	$query = "SELECT * FROM admin WHERE id = " . $_SESSION['admin_id'];
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
?>
<nav>
  <div class="sidebar-button">
	<i class='bx bx-menu sidebarBtn'></i>
	<span class="dashboard">Dashboard</span>
  </div>
 
  <div class="profile-details">
	
	<span class="admin_name"><?= $_SESSION['admin_name'] ?></span>
  </div>
</nav>