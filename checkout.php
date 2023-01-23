


<?php
session_start();

include 'header.php'; 
if(isset($_SESSION['user_id'])){?>

  <?php
  
	$conn = mysqli_connect('localhost', 'root', '', 'matjre');

	$grand_total = 0;
	$allItems = '';
	$items = array();
 

 
   
	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(",", $items);

 




?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>Checkout</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>

    <!-- Brand -->
 
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      
    </div>
  </nav>
<br>
  <div class="container" style="min-height:calc(100vh - 410px);">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">        
        <div class="table-responsive mt-2">
		   <div class="jumbotron p-3 mb-2 text-center">

		                  <h4 class="text-center  m-0 " style="color:#2ecc71;">Complete your Order!</h4>

    </div>
          <table class="table table-bordered table-striped text-center" >
			   <thead>
              <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $user_id=$_SESSION['user_id'];
                $conn = mysqli_connect('localhost', 'root', '', 'matjre');
                $stmt = $conn->prepare("SELECT * FROM cart WHERE sander_user=$user_id ");
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
							  			  				

              ?>
              <tr >
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
               <?= number_format($row['product_price']); ?><b>&nbsp;$</b>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <?= $row['qty'] ?>
                </td>
                <td><?= number_format($row['total_price']); ?><b>&nbsp;$</b></td>
               
              </tr>
              <?php $grand_total += $row['total_price']; ?>

              <?php endwhile; ?>
              <tr>
                
                <td colspan="4"><b>Grand Total</b></td>
                <td><?= number_format($grand_total); ?><b>&nbsp;$</b></td>
                
              </tr>
            </tbody>
          </table>
      
  <br>	                    

  <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" readonly name="name" value="<?= $_SESSION['user_n']; ?>" class="form-control" placeholder="Name" required style="border:1px solid green;"autocomplete="off">
          </div>

         <div class="form-group">
            <input type="email" name="email"   class="form-control" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="Invalid email address"; required autocomplete="off"style="border:1px solid green;" >
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Phone" pattern="((079)|(078)|(077)){1}[0-9]{7}"; title="Please enter a Jordanian phone number"; required style="border:1px solid green;"autocomplete="off">
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..." style="border:1px solid green;"required autocomplete="off"></textarea>
          </div>
         
          <div class="form-group">
		  	
				<button  name="submit" class="btn btn-success" style="float:right;" onclick="return confirm('Are You Sure to Complete The Order ?');"><i class="far fa-check-circle"></i>&nbsp;Complete</button>
				
                <a href="cart.php" name="cancel"  class="btn btn-danger"><i class="far fa-times-circle"></i>&nbsp;Cancel</a> 		  

      </div>
    </div>
  </div> 
  </div> 
  </div> 
        </form>  <br><br>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();
	
    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  



	

 <?php  } else {  header('location:LoginUser.php');}?>
</body>

</html>



<?php include 'footer.php'; ?>


