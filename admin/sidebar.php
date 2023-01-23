
<div class="sidebar"   style="background:#2ecc71;">
    <div class="logo-details">
      
<i class='bx bxs-dashboard'></i>
      <span class="logo_name">laptop_exps</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="order.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Orders </span>
          </a>
        </li>
        
        <li>
          <a href="admin.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Admins</span>
          </a>
        </li>
       
        <li>
          <a href="profile.php?id=<?= $_SESSION['admin_id'] ?>">
           <i class='bx bxs-user-account'></i>
            <span class="links_name">Profile </span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="logoutadmin.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>