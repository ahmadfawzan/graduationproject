
<?php
session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'matjre');

	// Add products into the cart table
	 if(isset($_SESSION['user_id'])){
	if (isset($_POST['pid'])) {
		$user_id=$_SESSION['user_id'];
	  $pid = $_POST['pid'];
	  $pname = $_POST['pname'];
	  $pprice = $_POST['pprice'];
	  $pimage = $_POST['pimage'];
	  $pcode = $_POST['pcode'];
	  $pqty = $_POST['pqty'];
	  $total_price = $pprice * $pqty;

	  $stmt = $conn->prepare('SELECT sander_user FROM cart WHERE sander_user=? and product_code=? ');
	  $stmt->bind_param('ss',$user_id,$pcode);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['sander_user'] ?? '';

	  if (!$code) {
	    $query = $conn->prepare('INSERT INTO cart (product_name,sander_user,product_price,product_image,qty,total_price,product_code) VALUES (?,?,?,?,?,?,?)');
	    $query->bind_param('sssssss',$pname,$user_id,$pprice,$pimage,$pqty,$total_price,$pcode);
	    $query->execute();

	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	  } else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
	}}
	else{
		if (isset($_POST['pid'])) {
			
		  $pid = $_POST['pid'];
		  $pname = $_POST['pname'];
		  $pprice = $_POST['pprice'];
		  $pimage = $_POST['pimage'];
		  $pcode = $_POST['pcode'];
		  $pqty = $_POST['pqty'];
		  $total_price = $pprice * $pqty;
	
		  $stmt = $conn->prepare("SELECT product_code FROM cart where product_code=? and sander_user=0");
		  $stmt->bind_param('s',$pcode);
		  $stmt->execute();
		  $res = $stmt->get_result();
		  $r = $res->fetch_assoc();
		  $code = $r['product_code'] ?? '';
	
		  if (!$code) {
			$query = $conn->prepare('INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code) VALUES (?,?,?,?,?,?)');
			$query->bind_param('ssssss',$pname,$pprice,$pimage,$pqty,$total_price,$pcode);
			$query->execute();
	
			echo '<div class="alert alert-success alert-dismissible mt-2">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Item added to your cart!</strong>
							</div>';
		  } else {
			echo '<div class="alert alert-danger alert-dismissible mt-2">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Item already added to your cart!</strong>
							</div>';
		  }
		}
	
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $conn->prepare('SELECT * FROM cart');
	  $stmt->execute();
	  $stmt->store_result();
	  $rows = $stmt->num_rows;

	  echo $rows;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) {
	  $id = $_GET['remove'];

	  $stmt = $conn->prepare('DELETE FROM cart WHERE id=?');
	  $stmt->bind_param('i',$id);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Item removed from the cart!';
	  header('location:cart.php');
	}

	// Remove all items at once from cart
	if(isset($_SESSION['user_id'])){
	if (isset($_GET['clear'])) {
		$user_id=$_SESSION['user_id'];
	  $stmt = $conn->prepare("DELETE FROM cart where sander_user=$user_id ");
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location:cart.php');
	}}
	else
	{
		if (isset($_GET['clear'])) {
			
		  $stmt = $conn->prepare('DELETE FROM cart where sander_user=0');
		  $stmt->execute();
		  $_SESSION['showAlert'] = 'block';
		  $_SESSION['message'] = 'All Item removed from the cart!';
		  header('location:cart.php');
	}}

	// Set total price of the product in the cart table
	if (isset($_POST['qty'])) {
	  $qty = $_POST['qty'];
	  $pid = $_POST['pid'];
	  $pprice = $_POST['pprice'];

	  $tprice = $qty * $pprice;

	  $stmt = $conn->prepare('UPDATE cart SET qty=?, total_price=? WHERE id=?');
	  $stmt->bind_param('isi',$qty,$tprice,$pid);
	  $stmt->execute();
	}

	// Checkout and save customer info in the orders table
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	 

      


	  $data = '';
	  $user_id=$_SESSION['user_id'];
	  $stmt = $conn->prepare('INSERT INTO orders (name,email,phone,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?,?)');
	  $stmt->bind_param('sssssss',$name,$email,$phone,$address,$pmode,$products,$grand_total);
	  $stmt->execute();
	  $stmt2 = $conn->prepare("DELETE FROM cart WHERE sander_user=$user_id ");
	  $stmt2->execute();

      
	  $data = '';
	  $query = "INSERT INTO orders (name,email,phone,address,products,amount_paid) VALUES ('$name', '$email','$phone', '$address', '$products', '$grand_total')";

	  $stmt = mysqli_query($conn, $query);
	  
	  $stmt2 = $conn->prepare("DELETE FROM cart WHERE sander_user=$user_id ");
	  $stmt2->execute();
	  $data .= '<div class="text-center">

		                 <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
						<h2 class="text-success">Your Order Placed Successfully!</h2>
						<div class="jumbotron p-3 mb-2 text-center">                
						<h6 class="lead"><b>Total Price of The Products is : </b><strong> ' . number_format($grand_total). '$</strong></h6>
						<h6 class="lead"><b>The Delivery Price is : </b><strong>10$</strong></h6>
     		            <h5 class="lead"><b>The Total Amount for Order is :  ' .  number_format($grand_total+10) . '$</b></h5>
    </div>
	<table style="border: 1px solid black;
  width: 100%;   text-align: center;">
	<tr style="border: 1px solid black;
  width: 100%; text-align: center;   ">
	<th  style="border: 1px solid black;background-color:#29c68c;">Name</th>
	<th style="border: 1px solid black;background-color:#29c68c;">Email</th>
	<th style="border: 1px solid black;background-color:#29c68c;">Phone</th>
	<th style="border: 1px solid black;background-color:#29c68c;">Address</th>
	<th style="border: 1px solid black;background-color:#29c68c;">Total Amount Paid</th></tr>
	<tr>
	<td style="border: 1px solid black; background-color:#dcd6d5;">' . $name . '</td>
	<td style="border: 1px solid black;background-color:#dcd6d5;">' . $email . '</td>
	<td style="border: 1px solid black;background-color:#dcd6d5;">' . $phone . '</td>
	<td style="border: 1px solid black;background-color:#dcd6d5;">' . $address . '</td>
	<td style="border: 1px solid black;background-color:#dcd6d5;">' . number_format($grand_total+10,2) . '$</td></tr>
	</table>
	</div>';
	  echo $data;
	}



    
?>